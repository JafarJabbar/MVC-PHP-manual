<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 10:22 PM
 */
$meta=[
    'title'=> "Giriş"

];

if (post('submit')){
    $username=post('username');
    $password=post('password');
    if (!$username){
        $error="İstfadəçi adınızı daxil edin...";
    }elseif (!$password ) {
        $error = "Şifrəni daxil edin...";
    }
    else{
        $row=User::UserExist($username);
        if ($row){
            // şifrə yoxlaması
            $pass_verify=password_verify($password,$row['password']);
            if ($pass_verify){
                User::Login($row);
                header("Location:".site_url());
            }
            else{
                $error="Şifrəni yanlış daxil etdiniz...";
            }
        }else{
            $error="Belə bir istfadəçi yoxdur...";
        }
    }
}

require view('login');