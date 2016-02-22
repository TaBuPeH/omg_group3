<?php

require_once ('humanoid.php');

class human extends humanoid

{
	var $useItems;
	
	
	function setStats($z='', $x='', $c='', $v='', $b='')
		{
			$this->setStrength($z);
			$this->setStamina($x);
			$this->setIntelligence($c);
			$this->setArmor($v);
			$this->setDamage($b);
			$this->setSpeed();
			$this->setUseItems();
		}
	
	
	function setUseItems()
	{
		$this->useItems = $this->intelligence*2;
	}
	function getUseItems()
	{
		return $this->useItems;
	}
	function setArmor($a='')
	{
		$this->armor = $this->useItems/4;
	}
	function setSpeed()
	{
		$this->speed = $this->speed + $this->useItems/2;
	}
}


$Mincho = new human();
$Mincho->setStats(rand(5,10),rand(5,10),rand(5,30));
$Mincho->setArmor();
$Mincho->setSpeed();

$Pencho = new human();
$Pencho->setStats(rand(5,10),rand(5,10),rand(5,30));
$Pencho->setArmor();
$Pencho->setSpeed();

echo "<pre>";
print_r ($Mincho);
print_r ($Pencho);
?>
