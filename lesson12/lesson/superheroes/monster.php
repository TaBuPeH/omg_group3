<?php
 
require_once ('lifeform.php');

class monster extends lifeform
{
	var $lifeRegen;
	
	function setStats($z='', $x='', $c='', $v='', $b='')
		{
			$this->setStrength($z);
			$this->setStamina($x);
			$this->setIntelligence($c);
			$this->setArmor($v);
			$this->setDamage($b); 
			$this->setLifeRegen(); 
			$this->setSpeed();
			
		}
	
	
	function setLifeRegen()
	{
		$this->lifeRegen=$this->stamina/2;
	}
	function getLifeRegen()
	{
		return $this->lifeRegen;
	}
	function isPresent($a)
	{
		if ($a == true)
	{
		echo ("The mighty Kraken comes for your lives!");
	}
		if ($a == false)
	{
		echo ("The mighty Kraken is having sex with Jenna Jameson, do not disturb!");
	}
	}
} 
/*

$kraken = new monster();
$kraken->setStats(100+rand(50,1000),rand(200,400),30,100);
$kraken->isPresent(false);

  
 echo "<pre>";
print_r ($kraken); 
 */
?>
