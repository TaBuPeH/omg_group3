<?php

/**
 * Created by PhpStorm.
 * User: Zerzolar
 * Date: 27.2.2016 г.
 * Time: 18:02
 */
class round
{

    var $warrior1;
    var $warrior2;
    var $round;


    public function __construct( &$warrior1 , &$warrior2 , &$round)
    {
        $this->warrior1 = $warrior1;
        $this->warrior2 = $warrior2;
        $this->round = $round;
    }



    public function doBattle ()
    {

        if( $this->isFirst() == 1 )
        {
            $this->attack($this->warrior1,$this->warrior2);
            if( $this->warrior1->getHealth()>0 && $this->warrior2->getHealth()>0  )
            {
                $this->attack($this->warrior2,$this->warrior1);
            }
            if( $this->warrior1->getHealth()>0 && $this->warrior2->getHealth()>0  )
            {
                if(rand(0,5) == 4)
                {
                    $this->specialAttack($this->warrior1,$this->warrior2);
                }
            }


        }
        else
        {
            $this->attack($this->warrior2,$this->warrior1);
            if( $this->warrior1->getHealth()>0 && $this->warrior2->getHealth()>0  )
            {
                $this->attack($this->warrior1,$this->warrior2);
            }
            if( $this->warrior1->getHealth()>0 && $this->warrior2->getHealth()>0  )
            {
                if(rand(0,5) == 4)
                {
                    $this->specialAttack($this->warrior2,$this->warrior1);
                }
            }


        }


    }

    private function isFirst ()
    {
        if($this->round==0)
        {
            if( $this->warrior1->getIntellect() > $this->warrior2->getIntellect())
            {
                return 1;
            }
            elseif ( $this->warrior1->getIntellect() < $this->warrior2->getIntellect())
            {
                return 2;
            }
            else
            {
                return rand(1,2);
            }
        }
        else
        {
            return rand(1,2);
        }
    }

    private function attack( &$attacker , &$attacked )
    {
        $crit=0;
        $def=0;
        $dmg=0;


        if (rand($attacker->getCtitChance(), 100) >= 75) {
            $crit = rand(5,$attacker->getCtitChance());
        }
        $def = $this->warrior2->getDefense();
        $dmg = $attacker->basicDamage()+$crit-$def;

        $attacked->attack($dmg);

        $attackedName = $attacked->getName();
        $attackerName = $attacker->getName();
        $attackedHealth = $attacked->getHealth();

        if($attacked->getHealth()<=0)
        {
            $dmg += $attacked->getHealth();
            $overKill = $attacked->getHealth()*-1;

            if($crit>0)
            {
                echo "<b>$attackedName</b> suffers $dmg<b>(Critical)</b> damage $def<b>(blocked)</b> $overKill<b>(overkill)</b> from <b>$attackerName</b>'s <b>Auto attack</b>.<br>";
            }
            else
            {
                echo "<b>$attackedName</b> suffers $dmg damage $def<b>(blocked)</b> $overKill<b>(overkill)</b> from <b>$attackerName</b>'s <b>Auto attack</b>.<br>";
            }
            echo "<b>$attackedName has died. </b>";
        }
        else
        {
            if($crit>0)
            {
                echo "<b>$attackedName</b> suffers $dmg<b>(Critical)</b> damage $def<b>(blocked)</b> from <b>$attackerName</b>'s <b>Auto attack</b> and is left with $attackedHealth health.<br>";
            }
            else
            {
                echo "<b>$attackedName</b> suffers $dmg damage $def<b>(blocked)</b> from <b>$attackerName</b>'s <b>Auto attack</b> and is left with $attackedHealth health.<br>";
            }
        }

    }

    private function specialAttack($attacker , $attacked)
    {
        $specialName = "special".rand(1,2);
        $attacker->$specialName($attacked);

    }

}