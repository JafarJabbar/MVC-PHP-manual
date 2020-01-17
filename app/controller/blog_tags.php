<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 10:22 PM
 */

$tag_url = route(2);
if ( !$tag_url ) {
    header(site_url('404'));
    exit;
}
$tag = $db->from('tags')
    ->where('tag_url', $tag_url)
    ->first();
if ( !$tag ) {
    header(site_url('404'));
    exit;
} else {
    $totalRecord = $db->from('post_tags')
        ->join('posts','posts.post_id=post_tags.post_tag_id')
        ->select(' count(id) as total')
        ->where('tag_id',$tag['tag_id'])
        ->total();

    $pageLimit = setting('blog_tag_pagination');
    $pageParam = 'page';
    $pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

    $row = $db->from('post_tags')
        ->join('posts','posts.post_id=post_tags.post_tag_id')
        ->join('categories','categories.category_id=posts.post_categories')
        ->select('posts.*,categories.*')
        ->where('tag_id',$tag['tag_id'])
        ->orderBy('post_id','desc')
        ->limit($pagination['start'], $pagination['limit'])
        ->all();
//print_r($row);
//echo
//exit();
$seo = json_decode($tag['tag_seo'], true);
    $meta = [
        'title' => $seo['title'] ? $seo['title'] : $tag_url,
        'description' => $seo['description'] ? $seo['description'] : $tag
    ];
    require view('blog_tags');
}