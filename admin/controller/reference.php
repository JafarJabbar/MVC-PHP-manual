<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 11:55 PM
 */
if (!permission('reference','show')){
    permission_page();
    exit;
}
$totalRecord = $db->from('reference')
    ->select('count(reference_id) as total')
    ->total();

$pageLimit = 10;
$pageParam = 'page';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from('reference')
    ->join('reference_categories','category_id=reference_categories')
    ->select('reference.*,reference_categories.*')
    ->groupBy('reference_id')
    ->orderBy('reference_id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])
    ->all();

require admin_view('reference');