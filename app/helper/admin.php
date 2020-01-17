<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 10:32 PM
 */
function admin_controller($controllerName){
    $controllerName=strtolower($controllerName);
    return PATH."/admin/controller/".$controllerName.'.php';
}
function admin_view($viewName){
    $viewName=strtolower($viewName);
    return PATH."/admin/view/".$viewName.'.php';
}
function user_ranks($rankId=null){
    $ranks=[
        1=>'Admin',
        2=>'Subadmin',
        3=>'İstfadəçi'
    ];
    return $rankId?$ranks[$rankId]:$ranks;
}

function permission_page(){
    die("<div style='padding: 100px 0 0 0; height: 80%; background:#cccccc;' class='permission_denied'><h1 style='font-size:100px;text-align: center;'>🚫</h1><h3 style='text-align: center; '>Bu əməliyyatı yerinə yetirmək üçün icazəniz yoxdur...!!!</h3></div>
");
    exit;

}


function permission($url,$action){
    $permission=json_decode(session('user_permissions'),true);
    if (isset($permission[$url][$action]))
        return true;
 return false;
}