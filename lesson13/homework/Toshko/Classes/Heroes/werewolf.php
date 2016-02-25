<?php 

	require_once("Classes/lifeform.php");

	class Werewolf extends lifeform
	{
		public function __construct($name, $dmg, $mana, $health, $critChance, $speed)
		{
			$this->type = "Werewolf";
			$this->attackName = "Claw Attack";
			$this->specialName = "Double Swing Attack";

			parent::__construct($name, $dmg, $mana, $health, $critChance, $speed);
		}

		protected function attack($target)
		{
			if($this->health <= 0)
			{
				return;
			}

			if($this->health <= $this->maxHealth*30/100)
			{
				$this->dmg *= 2;
			}

			$critDmg = 0;
			
			if(Rand(1, 100) <= $this->critChance)
			{
				$critDmg += $this->dmg / 2;
			}

			$target->health -= $this->dmg + $critDmg;
			if($target->health < 0) $target->health =0;
			
			$damage = $this->dmg + $critDmg;

			if($this->health <= $this->maxHealth*30/100)
			{
				$this->dmg /= 2;
			}

			echo "<p><b>".$this->name."(".$this->health."HP)"."</b> used <b>".$this->attackName."</b>!</p>";
			echo "<p><b>".$this->name."(".$this->health."HP)"."</b> took ".$damage."HP from <b>".$target->name."(".$target->health."HP)"."</b>!</p>";
		}

		protected function special($target)
		{
			if($this->health <= 0 || $this->mana <= 0)
			{
				return;
			}

			echo "<p><b>".$this->name."(".$this->health."HP)"."</b> used <b>".$this->specialName."</b>!</p>";

			$this->attack($target);
			$this->attack($target);
			$this->mana -= 6;
		}
	}
?>