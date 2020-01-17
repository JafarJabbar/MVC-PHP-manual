<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 11:55 PM
 */
if (!permission('contact','edit')){
    permission_page();
    exit;
}
$id=get('contact_id');
if (!$id){
    header("Location:".admin_url('contact'));
    exit;
}
$row=$db
    ->from('contact')
    ->where('contact_id',$id)
    ->first();
if (!$row){
    header("Location:".admin_url('contact'));
    exit;
}
$query=$db->update('contact')->where('contact_id',$id)->set([
    'contact_read_mark'=>1,
    'contact_read_date'=>date('Y-m-d H:i:s'),
    'contact_read_user'=>session('username')
]);
if (post('submit')) {
    if ( $data=form_control('user_email') ) {
        $data['user_url']=permalink($data['username']);
        $data['user_permissions']=json_encode($_POST['user_permissions']);
        if ($query){
            header("Location:".admin_url('users'));
            exit;
        }
    }else{
        $error="Xanaları doldurun...";
    }
}

require admin_view('edit_contact');