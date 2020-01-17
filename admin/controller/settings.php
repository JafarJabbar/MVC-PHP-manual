<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 11:55 PM
 */if (!permission('settings','show')){
    die("<div style='padding: 100px 0 0 0; height: 80%; background:#cccccc;' class='permission_denied'><h1 style='font-size:100px;text-align: center;'>🚫</h1><h3 style='text-align: center; '>Bu əməliyyatı yerinə yetirmək üçün icazəniz yoxdur...!!!</h3></div>
");
    exit;}
$themes=[];
foreach (glob(PATH.'/app/view/*/') as $folder)
{
    $folder=explode('/',rtrim($folder,'/'));
    $themes[]=end($folder);
}


if (isset($_POST['submit'])){
    if (!permission('settings','edit')){
        permission_page();
        exit;
    }else{
        $html='<?php'.PHP_EOL.PHP_EOL;
        foreach (post('settings') as $key=> $val){
            $html .='$settings["'.$key.'"]="'.$val.'";'.PHP_EOL;}
        file_put_contents(PATH."/app/settings.php",$html);
        header("Location:".admin_url('settings'));
    }

}
require admin_view('settings');