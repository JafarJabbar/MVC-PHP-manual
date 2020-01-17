<?php

if (!permission('tags','add')){
    permission_page();
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
            ->first();
        if ($query){
            $error="Bu adda etiket artıq mövcuddur.";
        }else{
            $query=$db->insert('tags')
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
require admin_view('add_tag');