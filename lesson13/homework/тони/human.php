<?php 

	require_once("lifeform.php");

	class Human extends LifeForm
	{
		private $hasWeed;

		public function __construct($name, $dmg, $health, $hasWeed)
		{
			$this->hasWeed = $hasWeed;
			
			parent::__construct($name, $dmg, $health);
		}

		protected function attack($target)
		{
			if($this->health < 0 || $target->health < 0)
			{
				return;
			}

			if($this->hasWeed == "true")
			{
				$heal = Rand(0, 5);
				$this->health += $heal;
			}

			$damage = $this->dmg;

			$target->health -= $damage;

			echo "<p>".$this->name." attacked ".$target->name." and took ".$damage."HP from him!</p>";
		}
	}
 ?>