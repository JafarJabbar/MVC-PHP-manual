<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 11:23 PM
 */
function site_url($url=false){
    return URL."/".$url;
}
function public_url($url=false){
    return URL."/public/".setting('theme').'/'. $url;
}
function admin_url($url=false){
    return URL."/admin/".$url;
}
function admin_public_url($url=false){
    return URL."/admin/public/".$url;
}
function error(){
    global $error;
    return isset($error) ? $error : false;
}
function success(){
    global $success;
    return isset($success) ? $success : false;
}
function menu($id){
    global $db;
    $query=$db->prepare('SELECT * FROM menus WHERE menu_id=:id');
    $query->execute([
        'id'=>$id
    ]);
    $row=$query->fetch(PDO::FETCH_ASSOC);
    if($row){
        $menu=json_decode($row['menu_content'],true);
        return $menu;
    }
    return false;
}
function cut_text($string,$limit){
    $string=strip_tags($string);
    $length=strlen($string);
    if ($length>=$limit){
        $string=mb_substr($string,$limit);
    }
    return $string;
}
