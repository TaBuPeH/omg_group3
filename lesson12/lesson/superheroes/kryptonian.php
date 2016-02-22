<?php
require_once ('humanoid.php');

class kryptonian extends humanoid

{
	var $fly;
	var $superpowers = array ('heatRay'=>'','superHumanStrength'=>'','regeneration'=>'');
	
	function setHeatRay($value)
 {
  $this->superpowers['heatRay'] = $value;

 }
 
 function getHeatRay()
 {
  return $this->superpowers['heatRay'];  
 }
	
	function setSuperhumanstrength($value)
 {
  $this->superpowers['superHumanStrength'] = $value;

 }
 
 function getSuperhumanstrength()
 {
  return $this->superpowers['superHumanStrength'];  
 }
	
	function setRegeneration($value)
 {
  $this->superpowers['regeneration'] = $value;

 }
 
 function getRegeneration()
 {
  return $this->superpowers['regeneration'];  
 }
	
	function setStats($z='', $x='', $c='', $v='', $b='')
		{
			 parent::setStats($z,$x,$c,$v,$b);
			$this->setSpeed();
			$this->setFly();
		}
	
	function setFly()
	{
		$this->fly = $this->intelligence + $this->speed;
		if ($this->fly > '200')
		{
			$this->fly = "Untargetable!";
		}
	}
	function getFly()
	{
		return $this->fly;
	}
	
	function doSuperAttack(&$x)
	{
	  	$x->setStamina($x->getStamina()-$this->superpowers['heatRay'] - $this->superpowers['superHumanStrength'] );
		return $x;
	}
	
}
/*
$superMincho = new kryptonian();
$superMincho->setStats('100', rand(100,200),'50','30');
$superMincho->setHeatray(rand(30,50));
$superMincho->setSuperhumanstrength('100');
$superMincho->setRegeneration(rand(80,120));
echo "<pre>";
print_r ($superMincho);


*/

?>
