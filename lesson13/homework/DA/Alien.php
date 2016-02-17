<?php
require_once("lifeforme.php");
class Alien extends Lifeform
{
	public function __construct($dmg, $hp, $luck,$name)
 	{
 		$this->attackName="Normal Punch";
 		$this->specialName="Sequence Of Normal Punches";


 		parent::__construct($dmg, $hp, $luck,$name);
 	}

 		public $sequentPunch = 4;


 		public function special(&$target)

 		{
 			$target->health = $target->health - $this->damage * $this->sequentPunch ;
 			echo "<p><b>".$this->Name."(".$this->health."HP, </b> used <b>".$this->specialName.")</b>!</p>"; 
 			echo "<p><b>".$target->Name."(".$target->health."HP,</b> took ".$this->damage * $this->sequentPunch."HP from <b>".$this->Name."(".$this->health."HP)</b>!</p>";
 				
 				if($this->health <= 0)
			{
				$this->health = 0;
				return;
			}

			
			if($target->health <= 0)
			{
				$target->health = 0;
				return;
			}
 		}

 		public function attack($target)
		{	
			$this->attacks($target);
		}


 	}

?>