<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 9:54 PM
 */
date_default_timezone_set('Asia/Baku');
session_start();
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
function loadClasses($className){
    require __DIR__."/classes/". strtolower($className).'.php';
}
spl_autoload_register("loadClasses");
$config=require __DIR__."/config.php";
try{
//    $db=new  PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'],$config['db']['user'],$config['db']['pass']);
    $db=new basicdb($config['db']['host'],$config['db']['name'],$config['db']['user'],$config['db']['pass']);
}catch (PDOException $e){
    die($e->getMessage());
}
foreach (glob(__DIR__.'/helper/*.php') as $helper){
    require  $helper;
}

require __DIR__."/settings.php";