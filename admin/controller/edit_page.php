<?php

if (!permission('pages','edit')){
    permission_page();
    exit;
}
$id=get('page_id');
if (!$id){
    header("Location:".admin_url('pages'));
    exit;
}
$query=$db->from('pages')
    ->where('page_id',$id)
    ->first();
if (!$query){
    header("Location:".admin_url('pages'));
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
        $query=$db->from('pages')
            ->where('page_url',$page_url)
            ->where('page_id',$id,'!=')
            ->first();
        if ($query){
            $error="Bu adda səhifə artıq mövcuddur.";
        }else{
            $query=$db->update('pages')
                ->where('page_id',$id)
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
$seo=json_decode($query['page_seo'],true);
require admin_view('edit_page');