<?php

class lifeform 

{
	var $strength;
	var $stamina;
	var $intelligence;
	var $armor;
	var $damage;
	var $breathe;
	var $speed;
	var $isAttacker=0;
	
	function __construct ($str = '', $sta = '', $int = '', $arm = '', $dmg = '')
	{
		$this->strength = $str;
		$this->stamina = $sta;
		$this->intelligence = $int;
		$this->armor = $arm;
		$this->damage = $dmg;
		$this->breathe = true;
	}
	function setStats($z='', $x='', $c='', $v='', $b='')
		{
			$this->setStrength($z);
			$this->setStamina($x);
			$this->setIntelligence($c);
			$this->setArmor($v);
			$this->setDamage($b);
			$this->setSpeed();
		}
		
		
	function setStat($statX,$value)
	{
		$this->{$statX} = $value;
	}
	
	function getStat($statX)
	{
		return $this->{$statX} ;
	}
	
	function setStrength($a)
	{
			$this->strength=$a;
	}
	
	function getStrength()
	{
			return $this->strength;
	}
	function setStamina($a)
	{
			$this->stamina=$a;
	}
	
	function getStamina()
	{
			return $this->stamina;
	}
	function setIntelligence($a)
	{
			$this->intelligence=$a;
	}
	
	function getIntelligence()
	{
			return $this->intelligence;
	}
	function setArmor($a)
	{
			
			$this->armor = $a;	
			
	}
	
	function getArmor()
	{
			return $this->armor;
	}
	
	
	
	function setDamage()
	{
			$this->damage=$this->strength/2;
	}
	
	function getDamage()
	{
			return $this->damage;
	}
	function setSpeed()
	{
		$this->speed = ($this->intelligence + $this->stamina)-($this->strength)/2;
		if ($this->speed < 0)
		{
			$this->speed = 1;
		}
	}
	function getSpeed()
	{
		return $this->speed;
	}
	
	function attack(&$x) // keep in mind what & does !!!!
	{
		echo get_class($this)." attacked ".get_class($x)." with a normal attack<br>";
		$x->setStamina($x->getStamina()-$this->damage);
	}
	
	function superAttack(&$x)
	{
		echo "<pre>";
		print_r($this);
		print_r($x);
		if(method_exists($this,'doSuperAttack'))
		{
			echo get_class($this)." attacked ".get_class($x)." with a SUPER UBER ATTACK attack<br>";
			$this->doSuperAttack($x);
		}
		
	}
	
	function doSuperAttack(&$x)
	{
		return $x;
	}
	
	
	function setIsAttacker($isAttacker)
	{
		$this->isAttacker = $isAttacker;
	}
	
	function getIsAttacker($isAttacker)
	{
		return $this->isAttacker;
	}
	
}	
/*
$primitive = new lifeform();



echo "<pre>";
print_r ($primitive);

$primitive->setStats('1','1',rand(1,3),'1','1');



echo "<pre>";
print_r ($primitive);
*/
?>
