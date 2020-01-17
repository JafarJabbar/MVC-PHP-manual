<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 11:55 PM
 */
if (!permission('posts','show')){
    permission_page();
    exit;
}
$totalRecord = $db->from('posts')
    ->select('count(post_id) as total')
    ->total();

$pageLimit = 10;
$pageParam = 'page';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from('posts')
    ->orderby('post_id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])
    ->all();

require admin_view('posts');