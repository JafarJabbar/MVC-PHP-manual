<?php

if (!permission('pages','add')){
    permission_page();
    exit;
}
if (post('submit')){
    $page_name=post('page_name');
    $page_content=post('page_content');
    $page_url=permalink(post('page_url'));
    if (!$page_url){
        $page_url=permalink($page_name);
    }
    if (!$page_name || !$page_content){
        $error="Xanaları tam doldurun.";
    }else{
        $page_seo=json_encode(post('page_seo'));
        // bele bir sehife var?
        $query=$db->from('pages')->where('page_url',$page_url)->first();
        if ($query){
            $error="Bu adda səhifə artıq mövcuddur.";
        }else{
            $query=$db->insert('pages')
                ->set([
                    'page_name'=>$page_name,
                    'page_url'=>$page_url,
                    'page_content'=>$page_content,
                    'page_seo'=>$page_seo
                ]);
            if ($query){
                header('Location:'.admin_url('pages'));
            }else{
                $error="Bir problem var.";
            }
    }


    }
}
require admin_view('add_page');