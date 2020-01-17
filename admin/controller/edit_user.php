<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 11:55 PM
 */
if (!permission('users','edit')){
    permission_page();

    exit;
}
$id=get('user_id');
if (!$id){
    header("Location:".admin_url('users'));
    exit;
}
$row=$db
    ->from('users')
    ->where('user_id',$id)
    ->first();
if (!$row){
    header("Location:".admin_url('users'));
    exit;
}

if (post('submit')) {
    if ( $data=form_control('user_email') ) {
        $data['user_url']=permalink($data['username']);
        $data['user_permissions']=json_encode($_POST['user_permissions']);
        if ($id==session('user_id')){
            $_SESSION['user_permissions']=$data['user_permissions'];
        }
        $query=$db->update('users')->where('user_id',$id)->set($data);


        if ($query){
            header("Location:".admin_url('users'));
            exit;
        }
    }else{
        $error="Xanaları doldurun...";
    }
}
$permissions=json_decode($row['user_permissions'],true);

require admin_view('edit_user');