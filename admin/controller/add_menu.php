<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/14/2019
 * Time: 8:12 PM
 */
if (!permission('menu','add')){
    die("<div style='padding: 100px 0 0 0; height: 80%; background:#cccccc;' class='permission_denied'><h1 style='font-size:100px;text-align: center;'>🚫</h1><h3 style='text-align: center; '>Bu əməliyyatı yerinə yetirmək üçün icazəniz yoxdur...!!!</h3></div>
");
    exit;
}
if (post('submit')){
    $menu=[];
    $menu_title=post('menu_title');
    if (!$menu_title){
        $error="Ən azı bir title girilməlidir";
    }elseif (!count(array_filter(post('title')))){
            $error="Ən azı bir menyu başlığı girilməlidir...";
        }else{
        $urls=post('url');
        foreach ( post('title') as $key => $title ){
                $arr=[
                    'title'=>$title,
                    'url'=>$urls[$key]
                ];
                if (post('sub_title_'.$key)){
                    $submenu=[];
                    $subUrls=post('sub_url_'.$key);
                    foreach (post('sub_title_'.$key) as $k => $subtitle){
                        $submenu[]=[
                            'title'=> $subtitle,
                            'url'=>$subUrls[$k]
                        ];
                    }
                    $arr['submenu']=$submenu;
                }
                $menu[]=$arr;

            }
            $query=$db->prepare('INSERT INTO menus SET menu_title=:menu_title,menu_content=:menu_content');

        $result=$query->execute([
            'menu_title'=>$menu_title,
            'menu_content'=> json_encode($menu)
        ]);
        if ($result){
            header('Location:' . admin_url('menu'));
        }
        else{
            $error = 'Bir problem yarandı!';
        }
        }


}
require admin_view('add_menu');