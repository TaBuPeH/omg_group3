<?php
/**
 * Created by PhpStorm.
 * User: Zerzolar
 * Date: 1.3.2016 г.
 * Time: 15:56
 */

    session_start();

    $user[0]['username'] = 'username';
    $user[0]['password'] = 'password';


    $user[1]['username'] = 'hristo1998';
    $user[1]['password'] = 'password';

    $_SESSION['incorrectPass'] = false;

    foreach($user as $key=>$value)
    {
        if($value['username'] == $_POST['username'])
        {
            if($value['password'] == $_POST['password'])
            {
                $_SESSION['loggedClient'] = true ;
                $_SESSION['loggedUser'] = $value['username'];
                $_SESSION['password'] = $value['password'];

            }
            else
            {
                $_SESSION['incorrectPass'] = true;
                echo "<meta http-equiv=\"refresh\" content=\"0;URL='../logInForm.php'\" /> ";
            }
        }
        else
        {
            $_SESSION['incorrectPass'] = true;
            echo "<meta http-equiv=\"refresh\" content=\"0;URL='../logInForm.php'\" /> ";
        }
    }



    echo "<meta http-equiv=\"refresh\" content=\"0;URL='../index.php'\" /> ";

?>