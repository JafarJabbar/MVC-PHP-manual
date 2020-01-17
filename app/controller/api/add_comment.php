<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 10/9/2019
 * Time: 5:08 AM
 */

$name=post('name');
$email=post('email');
$comment=post('comment');
$post_id=post('post_id');
if (session('user_id')){
    $name=session('username');
    $email=session('user_email');
}


if (!$name || !$email || !$post_id){
    $json['error']="Zəhmət olmasa bütün xanaları doldurun.";
}elseif (!$comment){
    $json['error']="Zəhmət olmasa rəy hissəsini boş saxlamayın.";
}elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $json['error']="Zəhmət olmasa emaili düzgün daxil edin.";
}else{
    if (session('user_id')){
        $status=setting('user_comment')==1 ? 1:0;
    }else{
        $status=setting('guest_comment')==1 ? 1:0;
    }
    $row=Blog::findPostById($post_id);
    $comment=[
        'comment_user_id'=>session('user_id'),
        'comment_post_id'=>$post_id,
        'comment_name'=>$name,
        'comment_email'=>$email,
        'comment_content'=>$comment,
        'comment_status'=>$status
    ];
    if (!$row){
        $json['error']='Bir problem yaşandı. Zəhmət olmasa yenidən cəhd edin.';
    }else{
        $insert=$db->insert('comments')
            ->set($comment);
    if (!$insert){
        $json['error']='Bir problem yashandi.';
    }else{
        if ($status==0){
            $json['success']='Rəyiniz təsdiqləndikdən sonra görünəcəkdir.';
        }else{
            $comment['comment_date']=date('Y-m-d H:i:s');
            ob_start();
            require view('static/comment');
            $output=ob_get_clean();
            $json['comment']=$output;
        }

    }
    }

}