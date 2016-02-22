<?php
require_once ('humanoid.php');

class asgardian extends humanoid

{
	var $technology;
	
	function setStats($z='', $x='', $c='', $v='', $b='')
		{
			$this->setStrength($z);
			$this->setStamina($x);
			$this->setIntelligence($c);
			$this->setArmor($v);
			$this->setDamage($b);
			$this->setSpeed();
			$this->setTechnology();
		}
	
	
	function setTechnology()
	{
		$this->technology = $this->intelligence*4;
	}
	function getTechnology()
	{
		return $this->technology;
	}
	function newArmor()
	{
		if (isset ($this->armor))
		{
			$this->armor = $this->armor + $this->technology;
		}
	}
	function newSpeed()
	{
		if (isset ($this->speed))
		{
			$this->speed = $this->speed + $this->technology;
		}
	}
	function newStamina()
	{
		if (isset ($this->stamina))
		{
			$this->stamina = $this->stamina + $this->technology;
		}
	}	
	function newStrength()
	{
		if (isset ($this->strength))
		{
			$this->strength = $this->strength + $this->technology;
		}
	}
	function newDamage()
	{
		if (isset ($this->damage))
		{
			$this->damage = $this->damage + $this->technology;
		}
	}
}


$example = new asgardian ();
$example->setStats(rand(50,100),rand(50,100),rand(50,100), rand(10,20));
$example->newStrength();
$example->newSpeed();
$example->newStamina();
$example->newDamage();
$example->newArmor();

echo "<pre>";
print_r ($example);



?>
