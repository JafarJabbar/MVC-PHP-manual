<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 10/14/2019
 * Time: 4:14 AM
 */



if (!permission('reference','edit')){
    permission_page();
    exit;
}
$id=get('reference_id');

$references=$db->from('reference')
    ->where('reference_id',$id)
    ->first();
$categories=$db->from('reference_categories')
    ->orderBy('category_id','DESC')
    ->all();
if (post('submit')){

    if ( $data=form_control('reference_url','reference_demo')){
        $data['reference_seo']=json_encode($data['reference_seo']);
        $data['reference_demo']=post('reference_demo');
         $data['reference_url']=permalink(post('reference_url')?post('reference_url'):$data['reference_title']);
           echo "<pre>";

         $query=$db->from('reference')
             ->where('reference_url',$data['reference_url'])
             ->where('reference_id',$id,"!=")
             ->first();
         if ($query){
             $error="Bu adda referans artıq əlavə olunmuşdur. Xahiş edirik başqa adı yoxlayasınız.";
         }
         else{
                    if ($references['reference_url']!=$data['reference_url']){
                        rename(PATH.'/upload/reference/'.$references['reference_url'],PATH.'/upload/reference/'.$data['reference_url'])   ;
                    }
                    $handle=new Upload($_FILES['reference_image']);
                    if ($handle->uploaded){
                        $handle->file_new_name_body   = $data['reference_url'].'_'.rand(0,9999);
                        $handle->image_resize = true;
                        $handle->image_x= 525;
                        $handle->image_y= 350;
                        $handle->process(site_url('/upload/reference/'.$data['reference_url']));
                    }else{
                        $error='Şəkil yülənməmişdir.';
                    }
                    if ($handle->processed){
                        $data['reference_image']=$handle->file_dst_name_body.'.'.$handle->file_dst_name_ext;
                        unlink(PATH.'/upload/reference/'.$data['reference_url'].'/'.$references['reference_image']);
                    }else{
                        $error= $handle->error;
                    }

         }
         print_r($references);
        print_r($data);
        $insert=$db->update('reference')
            ->where('reference_id',$id)
            ->set($data);
        if (!$insert){
            $error='Bir problem var.';
        }else{
            header("Location: ".admin_url('reference'));
        }


    }
}
$seo=json_decode($references['reference_seo'],true);




require admin_view('edit_reference');