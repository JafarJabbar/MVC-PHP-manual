<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/29/2019
 * Time: 4:47 AM
 */
if ($data=form_control()){
    $sent=send_email($data['email'],$data['name'],$data['subject'],$data['message']);
    if ($sent){
        $json['success']='Mesaj gonderildi.';
    }
}else{
    $json['error']='Xanalari doldurun.';
}