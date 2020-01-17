<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 10:22 PM
 */
$meta = [
    'title' => "Qeydiyyat"
];


if ( post('submit') ) {
    $username = post('username');
    $email = post('email');
    $password = post('password');
    $password_again = post('password_again');
    if ( !$username ) {
        $error = "İstfadəçi adınızı daxil edin...";
    } elseif ( !$email ) {
        $error = "E-mail ünvanını daxil edin...";
    } elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        $error = "Düzgün e-mail ünvanl daxil edin...";
    } elseif ( !$password || !$password_again ) {
        $error = "Şifrəni daxil edin...";
    } elseif ( $password != $password_again ) {
        $error = "Təkrar şifrəni düzgün daxil edin...";
    } else {
        // Qeydiyyatda varmi?

        $row = User::UserExist($username, $email);
         if ( $row ) {
            $error = "Belə istfadəçi artıq var. Zəhmət olmasa başqa email və ya istfadəçi adı daxil edin...";
        } else {

            $result=User::Registration([
                'username'=>$username,
                 "email"=>$email,
                "url"=>permalink($username),
                'user_pass'=>password_hash($password,PASSWORD_DEFAULT)
                ]);
             User::Login([
                 "user_id" => $db->lastInsertId(),
                 "username" => $username
             ]);
             $success="Qeydiyyatınız üçün təşəkkürlər. Yönləndirilirsiniz...";
             header('Refresh:2;' . site_url());
        }
    }
}
require view('register');