<?php
/**
 * Created by PhpStorm.
 * User: Zerzolar
 * Date: 13.3.2016 г.
 * Time: 17:18
 */

    require_once('dbClass.php');

    $user = $_POST;
    $hasError = false;


    foreach($user as $k=>$v)
    {
        $user[$k] = trim($user[$k]);
    }

    if(strlen($user['username'])< 4)
    {
        $hasError = true;
    }

    $query = "SELECT * FROM `users` WHERE `users`.`username` = '".$user['username']."'";
    $result = $db->fetchArray($query);

    if(count($result) > 0)
    {
        $hasError = true;
    }

    if(strlen($user['password'])< 4)
    {
        $hasError = true;
    }

    if($user['password'] != $user['password_2'])
    {
        $hasError = true;
    }

    if(!$hasError){
        $user['password'] = md5($user['password']);
        unset($user['repeat_password']);
        $db->saveArray("users", $user);
    }


header("Location: ../index.php");