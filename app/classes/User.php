<?php

/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/12/2019
 * Time: 10:51 PM
 */
class User
{
    public static  function Login($data){
        $_SESSION['user_id']=$data['user_id'];
        $_SESSION['username']=$data['username'];
        $_SESSION['user_email']=$data['user_email'];
        $_SESSION['user_rank']=$data['user_rank'];
        $_SESSION['user_permissions']=$data['user_permissions'];
    }
    public static function UserExist($username,$email="@@"){
        global $db;
        $query=$db->prepare("SELECT * FROM users WHERE username=:username || user_email=:email");
        $query->execute([
            'username'=>$username,
            'email'=>$email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $data
     * @return bool
     */
    public static function  Registration($data):bool{
        global $db;
        $sql = $db->prepare("INSERT INTO users(username,user_email,user_url,password) VALUES (:username,:email,:url,:user_pass)");
        return $sql->execute($data);
    }

}