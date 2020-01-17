<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 11:55 PM
 */
if (!permission('reference_categories','show')){
    permission_page();
    exit;
}

$query = $db->from('reference_categories')
    ->orderby('category_id', 'ASC')
    ->all();
require admin_view('reference_categories');