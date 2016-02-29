<?php

/**
 * Created by PhpStorm.
 * User: Zerzolar
 * Date: 27.2.2016 г.
 * Time: 16:31
 */

require_once ("lifeform.php");

class Beleganski extends lifeform
{


    public function __construct( $name )
    {
        $this->setStrenght(45);
        $this->setIntellect(30);
        $this->setDefense(40);
        $this->setHealth(1200);
        $this->setCtitChance("55%");
        $this->setName($name);
    }

    public function special1($target)
    {
        $attackedName = $target->getName();
        $attackerName = $this->getName();
        $dmg = rand(50,100)+$this->getIntellect();

        $target->attack($dmg);

        echo "<b>$attackerName</b> gets intoxicated from <b style='color: red'>Jack's Drink</b> and enrages. <br>";

        if( $target->getHealth() <= 0 )
        {
            $dmg += $target->getHealth();
            $overKill = $target->getHealth()*-1;
            echo "<b>$attackerName</b> hits <b>$attackedName</b> with <b style='color: red'>Enraged attack </b> for $dmg<b>(Critical)</b> damage $overKill<b>(Overkill).</b> <br>";
            echo "<b>$attackedName has died.</b>";

        }
        else
        {
            echo "<b>$attackerName</b> hits <b>$attackedName</b> with <b style='color: red'>Enraged attack </b> for $dmg <b>(Critical)</b> damage. <br>";
        }


    }

    public function special2($target)
    {
        $this->special1($target);
    }




}