<?php
/**
 * Created by PhpStorm.
 * User: Zerzolar
 * Date: 1.3.2016 г.
 * Time: 19:11
 */


    session_start();
    $_SESSION['loggedClient'] = false;
    $_SESSION['loggedUser'] = "";
    echo "<meta http-equiv=\"refresh\" content=\"0;URL='../index.php'\" /> ";
