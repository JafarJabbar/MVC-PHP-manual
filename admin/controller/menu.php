<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/14/2019
 * Time: 8:11 PM
 */
if (!permission('menu','show')){
    permission_page();
    exit;
}
$query=$db->prepare("SELECT * FROM menus ORDER BY menu_id DESC ");
$query->execute();
$rows=$query->fetchAll(PDO::FETCH_ASSOC);
require admin_view('menu');