<?php


$meta = [
    'title' => sprintf(setting("blog_search_title"),get("q")),
    'description' => sprintf(setting("blog_search_description"),get("q"))
];

    $totalRecord = $db->from('posts')
        ->select(' count(DISTINCT post_id) as total')
        ->join('categories', 'find_in_set(categories.category_id, posts.post_categories)')
        ->where('post_status', 1)
        ->group(function ($db){
            $db->where('post_name',get('q'),'LIKE')
                ->or_where('post_content',get('q'),'LIKE')
                ->or_where('post_short_content',get('q'),'LIKE');
        })
        ->total();

    $pageLimit = setting('blog_search_pagination');
    $pageParam = 'page';
    $pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

    $row = $db->from('posts')
        ->select('posts.*,categories.*')
        ->join('categories', 'find_in_set(categories.category_id, posts.post_categories)')
        ->where('post_status', 1)
        ->group(function ($db){
            $db->where('post_name',get('q'),'LIKE')
                ->or_where('post_content',get('q'),'LIKE')
                ->or_where('post_short_content',get('q'),'LIKE');
        })
        ->orderby('post_id', 'DESC')
        ->limit($pagination['start'], $pagination['limit'])
        ->all();
        print_r($row);
    require view('blog_search');
