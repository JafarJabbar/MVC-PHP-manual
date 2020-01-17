<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 11:55 PM
 */
if (!permission('tags','show')){
    permission_page();
    exit;
}
$totalRecord = $db->from('tags')
    ->select('count(tag_id) as total')
    ->total();

$pageLimit = 15;
$pageParam = 'page';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->prepare("SELECT tags.*,COUNT(post_tags.id) as total from tags
                      LEFT JOIN post_tags ON post_tags.tag_id=tags.tag_id
                      GROUP BY tags.tag_id ORDER BY tag_id");
$query->execute();
$row=$query->fetchAll(PDO::FETCH_ASSOC);

require admin_view('tags');