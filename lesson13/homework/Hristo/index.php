<?php

/**
 * Created by PhpStorm.
 * User: Zerzolar
 * Date: 24.2.2016 г.
 * Time: 18:35
 * Beta Release !!!
 */


   /**  Character *** str *** int *** def ***  HP ***                   Specials                      **
    *  Karapeeva   *  10   *  80   *  5    *  600  * JS ne e ezik za programirane / Vzima ti alkkohola *
    *  Beleganski  *  45   *  30   *  40   *  800  * Enrage /
    *  Dancho      *  60   *  45   *  50   *  1000 * C
    *  Kableshkov  *  75   *  40   *  60   *  900  * Vzima ti alkohola
    *  Stepan      *  55   *  5    *  30   *  800  * Pikae prez terasata /
    *  Panaiotov   *  80   *  50   *  60   *  1000 * Vie ne ste hora, mqstoto vi ne e tuk!!            *
    */



    require_once ("karapeeva.php");
    require_once ("beleganski.php");
    require_once ("round.php");


    $beleganski = new Beleganski("beleganski");
    $karapeeva = new Karapeeva("karapeeva");

    echo "<div style = \"width: 50% ; background-color: red; float:left; \"> <pre>";
    print_r($beleganski);
    echo "</pre></div>" ;

    echo "<div style = \"width: 50% ; background-color: red; float:left;\"> <pre>";
    print_r($karapeeva);
    echo "</pre></div>";

    $roundN= 0;

    while( $karapeeva->getHealth() > 0 && $beleganski->getHealth() > 0 )
    {

        $thisRound = new round($karapeeva,$beleganski,$roundN);
        $thisRound->doBattle();
        $roundN++;

    }

?>