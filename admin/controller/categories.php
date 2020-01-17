<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 11:55 PM
 */
if (!permission('categories','show')){
    permission_page();
    exit;
}

$query = $db->from('categories')
    ->orderby('category_id', 'ASC')
    ->all();
require admin_view('categories');