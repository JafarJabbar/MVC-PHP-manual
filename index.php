<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 9:55 PM
 */
require  __DIR__."/app/init.php";
$routeExplode=explode('?',$_SERVER['REQUEST_URI']);
$route=array_filter(explode('/',$routeExplode[0]));
if (SUBFOLDER_NAME!='/'){
    array_shift($route);
}
if (!route(0)){
    $route[0]='index';
}
if (!file_exists(controller($route[0]))){
    $route[0]='404';
}

if (setting('maintance_mode')==1  && route(0)!='admin' ){
    $route[0]='maintance_mode';
}
require controller(route(0));