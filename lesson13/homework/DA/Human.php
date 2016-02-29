<?php
require_once("lifeforme.php");
class Human extends Lifeform
{
	public function __construct($dmg, $hp, $luck,$name)
 	{
 		$this->attackName="Bitch slap";
 		$this->specialName="Gigantic slash";

 		parent::__construct($dmg, $hp, $luck,$name);

 	}

 		public $GiganticSlash = 20 ;
 		
 		public function special(&$target)
 		{
 			$target->health=$target->health-$this->GiganticSlash;
 				
 				if($this->health <= 0)
			{
				$this->health = 0;
			}

			
			if($target->health <= 0)
			{
				$target->health = 0;
			}
			
			echo "<p><b>".$this->Name."(".$this->health."HP, </b> used <b>".$this->specialName.")</b>!</p>"; 
 			echo "<p><b>".$target->Name."(".$target->health."HP,</b> took ".$this->GiganticSlash."HP from <b>".$this->Name."(".$this->health."HP)</b>!</p>";
 			
 		}

 	
 	
 	public function attack($target)
		{	
			$this->attacks($target);
		}

}

?>