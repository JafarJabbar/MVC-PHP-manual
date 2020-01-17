<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 10:22 PM
 */
if (route(1)=='category'){
    require controller('blog_category');
}elseif (route(1)=='search'){
        require controller('blog_search');
}elseif (route(1)=='tags'){
    require controller('blog_tags');
}
else {
    if ($post_url=route(1)){

        require controller('blog_detail');
    }
    else {
        $meta = [
            'title' => setting('blog_title'),
            'description' => setting('blog_description'),
            'keywords' => setting('keywords')
        ];

        $totalRecord = $db->from('posts')
            ->select('count(post_id) as total')
            ->join('categories', 'categories.category_id=posts.post_categories')
            ->where('post_status', 1)
            ->total();

        $pageLimit = setting('blog_pagination');
        $pageParam = 'page';
        $pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

        $query = $db->from('posts')
            ->select('posts.*,categories.*')
            ->join('categories', 'categories.category_id=posts.post_categories')
            ->where('post_status', 1)
            ->orderBy('post_id', 'DESC')
            ->limit($pagination['start'], $pagination['limit'])
            ->all();
        require view('blog');
    }
}