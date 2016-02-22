<?php
 
 require_once ('lifeform.php');
 
 class mechanical extends lifeform
 {
 	var $dmgRes;
 	
 	function __construct ()
	{
		parent::__construct();
		$this->breathe = false;
	}
	function setStats($z='', $x='', $c='', $v='', $b='')
		{
			$this->setStrength($z);
			$this->setStamina($x);
			$this->setIntelligence($c);
			$this->setArmor($v);
			$this->setDamage($b); 
			$this->setDmgRes();
			$this->setSpeed();
			
		}
	
	
	function setDmgRes()
	{
		$this->dmgRes=$this->armor/2;
	}
	function getDmgRes()
	{
		return $this->dmgRes;
	}
	
 	
 }
 
 $mecha = new mechanical;
 $mecha->setStats(5+rand(10,30),rand(15,25),rand(5,50),rand(10,50));
 
  
 echo "<pre>";
print_r ($mecha);
 
 
?>
