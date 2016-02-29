<?php 

	class LifeForm
	{
		private $isAlive = "true";

		protected $health;
		protected $dmg;
		protected $name;

		public function __construct($name, $dmg, $health)
		{
			$this->name = $name;
			$this->dmg = $dmg;
			$this->health = $health;
		}

		protected function attack($target)
		{
			//nothing....but BAGER
		}

		public function fight($fighter1, $fighter2)
		{
			echo "<p>Let the battle between ".$fighter1->name." and ".$fighter2->name." begin!!!</p><br>";
 
			while(1 == 1)
			{
				$fighter1->attack($fighter2);
				$fighter2->attack($fighter1);

				if($fighter1->health <= 0)
				{
					echo "<p>".$fighter1->name." has DIED!!!</p>";
					$fighter1->isAlive = "false";
					$fighter1->health = 0;
					echo "<p>".$fighter2->name." is the WINNER!!!</p>";
					return;
				}

				if($fighter2->health <= 0)
				{
					echo "<p>".$fighter2->name." has DIED!!!</p>";
					$fighter2->isAlive = "false";
					$fighter2->health = 0;
					echo "<p>".$fighter1->name." is the WINNER!!!</p>";
					return;
				}
			}
		}
	}
?>