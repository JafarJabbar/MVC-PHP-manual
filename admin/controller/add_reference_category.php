<?php

if (!permission('reference_categories','add')){
    permission_page();
    exit;
}
if (post('submit')){
    $category_name=post('category_name');
    $category_url=permalink(post('category_url'));
    if (!$category_url){
        $category_url=permalink($category_name);
    }
    $category_seo=json_encode(post('category_seo'));
    // bele bir kateqoriya var?
    $query=$db->from('reference_categories')->where('category_url',$category_url)->first();
    if ($query){
        $error="Bu adda kateqoriya artıq mövcuddur.";
    }else{
        $query=$db->insert('reference_categories')
            ->set([
                'category_name'=>$category_name,
                'category_url'=>$category_url,
                'category_seo'=>$category_seo
            ]);
        if ($query){
            header('Location:'.admin_url('reference_categories'));
        }else{
            $error="Bir problem var.";
        }
    }
//    echo $category_url;
//    echo $category_name;
//    print_r(post('category_seo'));
}
require admin_view('add_reference_category');