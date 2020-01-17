<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/27/2019
 * Time: 7:23 PM
 */
global $json;
$type=route(1);

if (file_exists(controller('api/'.$type))){
    require controller('api/'.$type);
}

echo json_encode($json);