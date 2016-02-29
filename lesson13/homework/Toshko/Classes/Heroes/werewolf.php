<?php 

	require_once("Classes/lifeform.php");

	class Werewolf extends lifeform
	{
		public function __construct($name, $dmg, $armor, $mana, $health, $critChance, $speed, $evasion)
		{
			$this->type = "Werewolf";
			$this->attackName = "Claw Attack";
			$this->specialName = "Double Swing Attack";

			parent::__construct($name, $dmg, $armor, $mana, $health, $critChance, $speed, $evasion);
		}

		public function attack($target)
		{
			if($this->health <= $this->maxHealth*20/100)
			{
				$this->dmg *= 2;
				echo "<p><b>".$this->name."</b> is in <b>ENRAGE MODE</b>!</p>";
			}

			$this->attackBase($target);

			if($this->health <= $this->maxHealth*20/100)
			{
				$this->dmg /= 2;
			}
		}

		public function special($target)
		{
			if($this->mana <= 0)
			{
				$this->mana = 0;
				echo "<p><b>".$this->name."</b> is out of mana</p>";
				return;
			}

			if($target->health <= 0)
			{
				$target->health = 0;
				return;
			}

			if($this->health <= 0)
			{
				$this->health = 0;
				return;
			}

			echo "<p><b>".$this->name."(".$this->health."HP, ".$this->mana."MP, ".$this->armor."Armor)"."</b> used <b>".$this->specialName."</b>!</p>";

			$this->attack($target);
			$this->attack($target);
			$this->mana -= 6;
		}
	}
?>