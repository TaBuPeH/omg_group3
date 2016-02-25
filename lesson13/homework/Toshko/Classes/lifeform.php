<?php

	class LifeForm
	{
		public $isAlive = "true";

		protected $name;
		protected $type;
		protected $attackName;
		protected $specialName;
		protected $dmg;
		protected $mana;
		protected $health;
		protected $critChance;
		protected $evasion;
		
		private $speed;

		protected function attack($target){}
		protected function special($target){}

		public function __construct($name, $dmg, $mana, $health, $critChance, $speed, $evasion)
		{
			$this->name = $name;
			$this->dmg = $dmg;
			$this->mana = $mana;
			$this->health = $health;
			$this->maxHealth = $health;
			$this->critChance = $critChance;
			$this->speed = $speed;
			$this->evasion = $evasion;
		}

		public static function fight($fighter1, $fighter2)
		{
			$round = 1;

			echo "<p>Let the battle between <b>".$fighter1->name."(".$fighter1->health.")"."</b> the ".$fighter1->type."and <b>".$fighter2->name."(".$fighter2->health.")"."</b> the ".$fighter2->type." begin!!!</p>";

			if($fighter1->speed > $fighter2->speed)
			{
				$first = "fighter1";
				$second = "fighter2";
				echo "<p><b>".$fighter1->name."</b> will start first!</p>";
			}
			else if($fighter1->speed < $fighter2->speed)
			{
				$first = "fighter2";
				$second = "fighter1";
				echo "<p><b>".$fighter2->name."</b> will start first!</p>";
			}
			else
			{
				if(Rand(0, 1) == 0)
				{
					$first = "fighter1";
					$second = "fighter2";
					echo "<p><b>".$fighter1->name."</b> will start first!</p>";
				}
				else
				{
					$first = "fighter2";
					$second = "fighter1";
					echo "<p><b>".$fighter2->name."</b> will start first!</p>";
				}
			}

			while($fighter1->isAlive == "true" && $fighter2->isAlive == "true")
			{
				if($fighter1->health > 0 && $fighter2->health > 0)
				{
					echo "<div></div><p><b>Round ".$round."</b></p>";
				}
				if($round % 2 != 0)
				{
					if($first == "fighter1")
					{
						$fighter1->attack($fighter2);
						echo "<div class='specialDiv'></div>";
						$fighter2->attack($fighter1);
					}
					else
					{
						$fighter2->attack($fighter1);
						echo "<div class='specialDiv'></div>";
						$fighter1->attack($fighter2);
					}
					
				}

				else
				{
					if($first == "fighter1")
					{
						$fighter1->special($second);
						echo "<div class='specialDiv'></div>";
						$second->special($fighter1);
					}
					else
					{
						$fighter2->special($fighter1);
						echo "<div class='specialDiv'></div>";
						$fighter1->special($fighter2);
					}
				}

				$round++;

				if($fighter1->health <= 0)
				{
					echo "<div></div>";
					echo "<p><b>".$fighter1->name."</b> has <b>DIED</b>!</p>";
					echo "<p><b>".$fighter2->name."</b> is the <b>WINNER</b>!</p>";
					$fighter1->isAlive = "false";
					return;
				}

				if($fighter2->health <= 0)
				{
					echo "<div></div>";
					echo "<p><b>".$fighter2->name."</b> has <b>DIED</b>!</p>";
					echo "<p><b>".$fighter1->name."</b> is the <b>WINNER</b>!</p>";
					$fighter2->isAlive = "false";
					return;
				}
				
				if($round == 35)
				{
					echo "<p>DRAW!</p>";
					return;
				}
			}
		}
	}
?>