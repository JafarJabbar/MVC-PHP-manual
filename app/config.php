<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 9:59 PM
 */
define('PATH',realpath('.'));
define('SUBFOLDER_NAME',trim(dirname($_SERVER['SCRIPT_NAME']),'/'));
define('URL','http://'.$_SERVER['HTTP_HOST'].'/'.SUBFOLDER_NAME);
return[
    'db'=>[
        'name'=>'cms',
        'host'=>'localhost',
        'user'=>'root',
        'pass'=>''
    ]
];