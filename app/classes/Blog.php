<?php

/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/30/2019
 * Time: 1:11 AM
 */
class Blog
{
    public static function getCategory(){
        global $db;
        $query=$db->prepare("Select categories.*, COUNT(post_id) AS total FROM posts
                    JOIN categories ON category_id=post_categories
                    GROUP BY categories.category_id");
        $query->execute();
        return $query;
    }
    public static  function  findPost($category_url){
        global $db;
        $query=$db->from('posts')
            ->select('posts.*,GROUP_CONCAT(categories.category_name SEPARATOR " , ") AS category_name,GROUP_CONCAT(categories.category_url SEPARATOR " , ") AS category_url')
            ->join('categories', 'find_in_set(categories.category_id, posts.post_categories)')
            ->where('post_url',$category_url)
            ->where('post_status',1)
            ->groupBy('post_id')
            ->first();
        return $query;
    }
    public static  function  findPostById($postId){
        global $db;
        $query=$db->from('posts')
            ->where('post_id',$postId)
            ->where('post_status',1)
            ->first();
        return $query;
    }
    public  static  function getRandomTags($limit){
        global $db;
        return $db->from('tags')
            ->orderBy('','rand()')
            ->limit(0,$limit)
            ->all();
    }
}