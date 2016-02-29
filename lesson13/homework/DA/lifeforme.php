<?php
 
 class Lifeform
 {

 	public $isAlive="true";
 	protected $damage;
 	public $health;
 	protected $luck;
 	protected $Name;


 	public function __construct($dmg, $hp, $luck,$name)
 	{
 		$this->damage = $dmg;
 		$this->health = $hp;
 		$this->luck = $luck;
 		$this->Name=$name;

 	}
 	public function attacks(&$target)
 	{

 			$target->health=$target->health-$this->damage;


 			if($this->health <= 0)
			{
				$this->health = 0;
			}

			
			if($target->health <= 0)
			{
				$target->health = 0;
			}
			
	echo "<p><b>".$this->Name."(".$this->health."HP, </b> used <b>".$this->attackName.")</b>!</p>";
				echo "<p><b>".$target->Name."(".$target->health."HP </b> took ".$this->damage."HP from <b>".$this->Name."(".$this->health."HP)</b>!</p>";


 	}

 	public function setHp($a)
 	{
 		$this->health=$a;
 	}

 	public function getHp()
 	{

 		return $this->health;
 	}

 	public function setDmg($b)
 	{
 		$this->damage=$b;
 	}
 	public function getDmg()
 	{
 		return $this->damage;
 	}
 
 	public function setName($n)
 	{
 		$this->Name=$n;
 	}
 	public function getName()
 	{
 		return $this->Name;
 	}
 	public function setLuck($l)
 	{
 		$this->luck=$l;
 	}

 	public function GetLuck()
 	{
 		return $this->luck;
 	}
	}	

?>