<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/29/2019
 * Time: 4:47 AM
 */
$json=[];
$type=route(2);
if (file_exists(admin_controller('api/'.$type))){
    require admin_controller('api/'.$type);
}
echo json_encode($json);