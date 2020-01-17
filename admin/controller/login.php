<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/25/2019
 * Time: 4:14 PM
 */


if (post("submit")){
    if ($data=form_control('user_permissions')) {
        $row=$db->from('users')->where('user_url',permalink($data['username']))->first();
        if (!$row){
            $error='Belə istfadəçi yoxdur!';
        }
        else{
            $pass_verify=password_verify($data['password'],$row['password']);
            if ($pass_verify){
                if ($row['user_rank']!=3){
                    User::Login($row);
                    header("Location:".admin_url());
                }else{
                    $error="Bu səhifəyə keçmək üçün icazəniz yoxdur!";
                }
            }else{
                $error="Şifrəniz səhvdir!";
            }

        }
    }else{
        $error='Xanaları doldurun...';
    }
}
require admin_view('login');