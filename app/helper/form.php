<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/8/2019
 * Time: 12:22 AM
 */

function post($name){
    if (isset($_POST[$name])){
            if (is_array($_POST[$name])){
                return array_map(function ($item){
                    return htmlspecialchars(trim($item));
                },$_POST[$name]);
            }
        return (htmlspecialchars(trim($_POST[$name])));
    }
}
function get($name){
    if (isset($_GET[$name])){
        if (is_array($_GET[$name])){
            return array_map(function ($item){
                return htmlspecialchars(trim($item));
            },$_GET[$name]);
        }
        return (htmlspecialchars(trim($_GET[$name])));
    }
}
function form_control(...$except_this){
    unset($_POST['submit']);
    $data=[];
    $error=false;
    foreach ($_POST as $key => $value){
        if (!in_array($key,$except_this )&& !post($key)){
            $error=true;
        }
        else{
            $data[$key]=post($key);
        }
    }
    if ($error){
        return false;
    }
    return $data;

}
