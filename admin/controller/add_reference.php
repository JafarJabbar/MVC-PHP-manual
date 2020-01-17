<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 10/14/2019
 * Time: 4:14 AM
 */


if (!permission('reference','add')){
    permission_page();
    exit;
}
$categories=$db->from('reference_categories')
    ->orderBy('category_id','DESC')
    ->all();
if (post('submit')){

    if ( $data=form_control('reference_url','reference_demo')){
        $data['reference_seo']=json_encode($data['reference_seo']);
        $data['reference_demo']=post('reference_demo');
         $data['reference_url']=permalink(post('reference_url')?post('reference_url'):$data['reference_title']);
         $query=$db->from('reference')
             ->where('reference_url',$data['reference_url'])
             ->first();
         if ($query){
             $error="Bu adda referans artıq əlavə olunmuşdur. Xahiş edirik başqa adı yoxlayasınız.";
         }
         else{
                if (mkdir(PATH.'/upload/reference/'.$data['reference_url'],0777)){
                    $handle=new Upload($_FILES['reference_image']);
                    if ($handle->uploaded){
                        $handle->file_new_name_body   = $data['reference_url'].'_'.rand(0,9999);
                        $handle->image_resize = true;
                        $handle->image_x= 525;
                        $handle->image_y= 350;
                        $handle->process(PATH.'/upload/reference/'.$data['reference_url']);
                    }else{
                        $error='Şəkil yülənməmişdir.';
                    }
                    if ($handle->processed){
                        $data['reference_image']=$handle->file_dst_name_body.'.'.$handle->file_dst_name_ext;
                    }else{
                        $error= $handle->error;
                    }
                }else{
                    $error="Bu adda qovluq artıq mövcuddur.";
                }
         }

        $insert=$db->insert('reference')
            ->set($data);
        if (!$insert){
            $error='Bir problem var.';
        }else{
            header("Location: ".admin_url('reference'));
        }


    }
}





require admin_view('add_reference');