<?php


function debug($info)
{
	echo "<pre>";
	print_r($info);
	echo "</pre>";
}




class lifeform
{
	private $breathe = 1;
	protected $life;
	protected $dmg;
	
	public function __construct($life, $damage)
	{
		$this->life = $life;
		$this->dmg = $damage;
	}


	public function attack(&$target)
	{
		$target->life = $target->life - $this->dmg;	
	}
	
}


class humanoid extends lifeform
{
	public function __construct($life, $damage)
	{
		parent::__construct($life, $damage);
		
	}
	
}


class human extends humanoid
{
	protected $utility;
	
	public function setUtilityDamage($modifier)
	{
		$this->utility = $modifier;
	}
	
	public function getUtilityDamage()
	{
		return $this->utility;
	}
	
	
	public function useDamageBoost()
	{
		$this->dmg = $this->dmg*$this->utility;
	}
}

class kryptonian extends humanoid
{
	protected $heatRay;
	
	public function setHeatRay($d)
	{
		$this->heatRay = $d;
	}
	
	public function getHeatRay()
	{
		return $this->heatRay;
	}
	
	public function doHeatRay(&$target)
	{
		$target->life = $target->life - $this->getHeatRay();	
	}
}

$batman = new human(100, 10);
$batman->setUtilityDamage(1.2);

$superman = new kryptonian(100, 10);
$superman->setHeatRay(18);


$batman->attack($superman);
$superman->attack($batman);
$batman->useDamageBoost();
$batman->attack($superman);
$superman->doHeatRay($batman);


debug($superman);
debug($batman);
