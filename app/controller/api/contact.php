<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/27/2019
 * Time: 7:27 PM
 */
if ($data=form_control('phone')){
    if (filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
        $query=$db->insert('contact')
            ->set([
                'contact_name'=>$data['name'],
                'contact_email'=>$data['email'],
                'contact_phone'=>$data['phone'],
                'contact_subject'=>$data['subject'],
                'contact_message'=>$data['message']
            ]);
        if ($query){
            $json['success']='Mesajınız üçün təşəkkürlər. Ən tez bir zamanda sizə cavab veriləcəkdir.';
        }else{
            $json['error']='Bir problem var. Zəhmət olmasa bu barədə digər əlaqə vasitələri ilə bizə məlumat verəsiniz.';
        }
    }else{
        $json['error']="Xahiş edirik düzgün email ünvanı daxil edəsiniz.";
    }
}else{
    $json['error']="Xahiş edirik bütün xanaları doldurasınız.";
}

