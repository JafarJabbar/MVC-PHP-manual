<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 10:22 PM
 */

$category_url = route(2);
if ( !$category_url ) {
    header(site_url('404'));
    exit;
}
$category = $db->from('categories')
    ->where('category_url', $category_url)
    ->first();
if ( !$category ) {
    header(site_url('404'));
    exit;
} else {
    $totalRecord = $db->from('posts')
        ->select(' count(DISTINCT post_id) as total')
        ->join('categories', 'find_in_set(categories.category_id, posts.post_categories)')
        ->where('post_status', 1)
        ->findInSet('post_categories',$category['category_id'])
        ->total();

    $pageLimit = setting('blog_category_pagination');
    $pageParam = 'page';
    $pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

    $row = $db->from('posts')
        ->select('posts.*,categories.*')
        ->join('categories', 'find_in_set(categories.category_id, posts.post_categories)')
        ->where('post_status', 1)
        ->findInSet('post_categories',$category['category_id'])
        ->groupBy('posts.post_id')
        ->orderby('post_id', 'DESC')
        ->limit($pagination['start'], $pagination['limit'])
        ->all();

$seo = json_decode($category['category_seo'], true);
    $meta = [
        'title' => $seo['title'] ? $seo['title'] : $category_url,
        'description' => $seo['description'] ? $seo['description'] : $category_url
    ];

    require view('blog_category');
}