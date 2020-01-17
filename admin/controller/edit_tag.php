<?php

if (!permission('tags','edit')){
    permission_page();
    exit;
}
$id=get('tag_id');
if (!$id){
    header("Location:".admin_url('tags'));
    exit;
}
$query=$db->from('tags')
    ->where('tag_id',$id)
    ->first();
if (!$query){
    header("Location:".admin_url('tags'));
    exit;
}
if (post('submit')){
    $tag_name=post('tag_name');
    $tag_url=permalink(post('tag_url'));
    if (!$tag_url){
        $tag_url=permalink($tag_name);
    }
    if (!$tag_name){
        $error="Xanaları tam doldurun.";
    }else{
        $tag_seo=json_encode(post('tag_seo'));
        // bele bir sehife var?
        $query=$db->from('tags')
            ->where('tag_url',$tag_url)
            ->where('tag_id',$id,'!=')
            ->first();
        if ($query){
            $error="Bu adda səhifə artıq mövcuddur.";
        }else{
            $query=$db->update('tags')
                ->where('tag_id',$id)
                ->set([
                    'tag_name'=>$tag_name,
                    'tag_url'=>$tag_url,
                    'tag_seo'=>$tag_seo
                ]);
            if ($query){
                header('Location:'.admin_url('tags'));
            }else{
                $error="Bir problem var.";
            }
    }


    }
}
$seo=json_decode($query['tag_seo'],true);
require admin_view('edit_tag');