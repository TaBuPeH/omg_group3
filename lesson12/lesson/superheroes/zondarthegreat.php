<?php

require_once ('human.php');
class zondar extends human
{
	var $immortality;
	
	function setStats($z='', $x='', $c='', $v='', $b='')
		{
			$this->setStrength($z);
			$this->setStamina($x);
			$this->setIntelligence($c);
			$this->setArmor($v);
			$this->setDamage($b);
			$this->setSpeed();
			$this->setUseItems();
			$this->setImmortality();
		}
	function setImmortality()
	{
		$this->immortality=$this->stamina*10;
	}
	function getImmortality()
	{
		return $this->immortality;
	}
	function immortal()
	{
		if ($this->stamina<'450')
		{
			$this->stamina += $this->immortality;
			
		}
	}
	

}

$ZondarTheGreat = new zondar();
$ZondarTheGreat->setStats (rand(100,1000),rand(400,500),700);
$ZondarTheGreat->newArmor();
$ZondarTheGreat->newSpeed();
// $ZondarTheGreat->setStamina("Zondar cannot die!");
$ZondarTheGreat->immortal();

echo "<pre>";
print_r ($ZondarTheGreat);
?>
