<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 11:55 PM
 */
if (!permission('comments','edit')){
    permission_page();
    exit;
}
$id=get('comment_id');
if (!$id){
    header("Location:".admin_url('comments'));
    exit;
}
$row=$db
    ->from('comments')
    ->join('posts','posts.post_id=comments.comment_post_id')
    ->join('users','users.user_id=comments.comment_user_id','left')
    ->where('comment_id',$id)
    ->first();
if (!$row){
    header("Location:".admin_url('comments'));
    exit;
}

if (post('submit')) {
    if ( $data=form_control('comment_status') ) {
         $data['comment_status']=post('comment_status');
        $query=$db->update('comments')
            ->where('comment_id',$id)
            ->set([
                'comment_name'=>$data['comment_name'],
                'comment_email'=>$data['comment_email'],
                'comment_content'=>$data['comment_content'],
                'comment_status'=>$data['comment_status']
            ]);
        if ($query){
            header("Location:".admin_url('comments'));
            exit;
        }
    }else{
        $error="Xanaları doldurun...";
    }
}

require admin_view('edit_comment');