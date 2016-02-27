<?php

/**
 * Created by PhpStorm.
 * User: Zerzolar
 * Date: 27.2.2016 г.
 * Time: 15:57
 */


require_once ("lifeform.php");

class Karapeeva extends lifeform
{

    public function __construct($name)
    {
        $this->setStrenght(10);
        $this->setIntellect(80);
        $this->setDefense(5);
        $this->setHealth(600);
        $this->setCtitChance("50%");
        $this->setName($name);
    }

    public function special1($target)
    {

        $attackedName = $target->getName();
        $attackerName = $this->getName();
        $dmg = rand(150,300);

        $target->attack($dmg);



        if( $target->getHealth() <= 0 )
        {
            $dmg += $target->getHealth();
            $overKill = $target->getHealth()*-1;
            echo "<b>$attackerName</b> tells <b>$attackedName</b> that <b style='color: red'>\"JS is not a programming language\"</b> and he suffers $dmg<b>(Critical)</b> damage $overKill<b>(Overkill)</b>. <br>";
            echo "<b>$attackedName has died.</b>";

        }
        else
        {
            echo "<b>$attackerName</b> tells <b>$attackedName</b> that <b style='color: red'>\"JS is not a programming language\"</b> and he suffers $dmg<b>(Critical)</b> damage. <br>";
        }

    }

    public function special2($target)
    {

        $attackedName = $target->getName();
        $attackerName = $this->getName();
        $dmg = rand(200,400);

        $target->attack($dmg);



        if( $target->getHealth() <= 0 )
        {
            $dmg += $target->getHealth();
            $overKill = $target->getHealth()*-1;
            echo "<b>$attackerName</b> <span style='color: red'>leaves</span> <b>$attackedName</b> <span style='color: red'>without alcohol</span> and he suffers $dmg <b>(Critical)</b> damage. $overKill<b>(Overkill)</b> <br>";
            echo "<b>$attackedName has died.</b>";

        }
        else
        {
            echo "<b>$attackerName</b> <span style='color: red'>leaves</span> <b>$attackedName</b> <span style='color: red'>without alcohol</span> and he suffers $dmg <b>(Critical)</b> damage. <br>";
        }

    }


}