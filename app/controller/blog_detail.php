<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 10/8/2019
 * Time: 5:26 PM
 */

$row=Blog::findPost($post_url);
if (!$row){
    header("Location:".site_url('404'));
}
$seo=json_decode($row['post_seo'],true);
$meta = [
    'title' => $seo['title'] ? $seo['title'] : $post_url,
    'description' => $seo['description'] ? $seo['description'] : cut_text($row['post_short_content'],200)
];


$comments=$db->from('comments')
    ->where('comment_post_id',$row['post_id'])
    ->where('comment_status',1)
    ->all();


require view('blog_detail');