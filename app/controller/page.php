<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 10/1/2019
 * Time: 4:26 PM
 */
$site_url=route(1);
if (!$site_url){
    header('Location:'.site_url('404'));
    exit;
}
$query=$db->from('pages')
    ->where('page_url',$site_url)
    ->first();
if (!$query){
    header('Location:'.site_url('404'));
    exit;
}

$seo=json_decode($query['page_seo'],true);

$meta=[
    'title'=>$seo['title'] ? $seo['title']:$query['page_name'],
    'description'=>$seo['description'] ? $seo['description']:cut_text($query['page_content'],500)
];

require view('page');