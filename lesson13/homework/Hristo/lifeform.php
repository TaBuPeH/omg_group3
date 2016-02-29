<?php

/**
 * Created by PhpStorm.
 * User: Zerzolar
 * Date: 24.2.2016 г.
 * Time: 18:35
 */


class lifeform
{

    private $strenght = 0;
    private $intellect = 0;
    private $defense = 0;
    private $health = 0;
    private $critChance = 0;
    private $name;

    protected function __construct( $strenght , $intellect , $defense , $health )
    {
        $this->strenght = $strenght;
        $this->intellect = $intellect;
        $this->defense = $defense;
        $this->health = $health;
    }

    protected function setStrenght( $strenght )
    {
        $this->strenght = $strenght;
    }

    public function getStrenght()
    {
        return $this->strenght;
    }


    protected function setIntellect( $intellect )
    {
        $this->intellect = $intellect;
    }

    public function getIntellect()
    {
        return $this->intellect;
    }


    protected function setDefense( $defense )
    {
        $this->defense = $defense;
    }

    public function getDefense()
    {
        return rand(0,$this->defense/5);
    }


    protected function setHealth( $health )
    {
        $this->health = $health;
    }

    public function getHealth()
    {
        return $this->health;
    }

    protected function setName( $name )
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    protected function setCtitChance($crit)
    {
        $this->critChance=$crit;
    }

    public function getCtitChance()
    {
        $crit =$this->critChance+0;
        return $crit;
    }


    public function basicDamage ()
    {
        return $this->strenght + rand(10,30) ;
    }

    public function attack($dmg)
    {
        $this->health -= $dmg;
    }

}