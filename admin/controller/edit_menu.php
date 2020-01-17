<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/14/2019
 * Time: 8:12 PM
 */
if (!permission('menu','edit')){
    permission_page();
    exit;
}
$id = get('id');
if ( !$id ) {
    header("Location" . admin_url('manu'));
}
$query = $db->prepare('SELECT * FROM menus WHERE menu_id=:id');
$query->execute(['id' => $id]);
$row = $query->fetch(PDO::FETCH_ASSOC);

$menu_title = post('menu_title');
$urls = post('url');
if ( post('submit') ) {

    if ( !post('menu_title') ) {
        $error = "Ən azı bir title girilməlidir";
    } elseif ( !count(array_filter(post('title'))) ) {
        $error = "Ən azı bir menyu başlığı girilməlidir...";
    } else{
        foreach (post('title') as $key => $title) {
            $arr = [
                'title' => $title,
                'url' => $urls[$key]
            ];
            if ( post('sub_title_' . $key) ) {
                $submenu = [];
                $subUrls = post('sub_url_' . $key);
                foreach (post('sub_title_' . $key) as $k => $subtitle) {
                    $submenu[]= [
                        'title' => $subtitle,
                        'url' => $subUrls[$k]
                    ];
                }
                $arr['submenu'] = $submenu;

            }
            $menu[] = $arr;

        }
        $query = $db->prepare('UPDATE menus SET menu_title=:menu_title,menu_content=:menu_content WHERE menu_id=:id');
       $result= $query->execute([
            'menu_title' => $menu_title,
            'menu_content' => json_encode($menu),
            'id' => $id
        ]);
        if ($result) {
            header('Location:' . admin_url('menu'));
        } else {
            $error = 'Bir sorun oluştu ve menü güncellenemedi!';
        }


    }


}
$menuContent = json_decode($row['menu_content'], true);

require admin_view('edit_menu');
