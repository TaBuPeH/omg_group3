<?php
/**
 * Created by PhpStorm.
 * User: Zerzolar
 * Date: 1.3.2016 г.
 * Time: 19:53
 */

    session_start();

    $_SESSION['incorrectPass'] = false;

    if( $_POST['password'] == $_SESSION['password'])
    {
        $_SESSION['loggedUser'] = $_POST['username'];
        echo "<meta http-equiv=\"refresh\" content=\"0;URL='../index.php'\" /> ";
    }
    else
    {
        $_SESSION['incorrectPass'] = true;
        echo "<meta http-equiv=\"refresh\" content=\"0;URL='../settings.php'\" /> ";

    }


