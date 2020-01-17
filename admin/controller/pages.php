<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 11:55 PM
 */
if (!permission('pages','show')){
    permission_page();
    exit;
}
$totalRecord = $db->from('pages')
    ->select('count(page_id) as total')
    ->total();

$pageLimit = 10;
$pageParam = 'page';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from('pages')
    ->orderby('page_id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])->all();
require admin_view('pages');