<?php 

	require_once("Classes/lifeform.php");

	class Werewolf extends lifeform
	{
		public function __construct($name, $dmg, $mana, $health, $critChance, $speed, $evasion)
		{
			$this->type = "Werewolf";
			$this->attackName = "Claw Attack";
			$this->specialName = "Double Swing Attack";

			parent::__construct($name, $dmg, $mana, $health, $critChance, $speed, $evasion);
		}

		protected function attack($target)
		{
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

			if($this->health <= $this->maxHealth*20/100)
			{
				$this->dmg *= 2;
				echo "<p><b>".$this->name."</b> is in <b>ENRAGE MODE</b>!</p>";
			}

			$critDmg = 0;
			$damage = 0;

			echo "<p><b>".$this->name."(".$this->health."HP, ".$this->mana."MP)"."</b> used <b>".$this->attackName."</b>!</p>";
			
			if(Rand(1, 100) <= $this->critChance)
			{
				$critDmg += $this->dmg / 2;
			}

			if( !(Rand(1, 100) <= $this->evasion) )
			{
				$target->health -= $this->dmg + $critDmg;
				if($target->health < 0) 
				{
					$target->health = 0;
				}
				$damage = $this->dmg + $critDmg;
			}
			else
			{
				echo "<p><b>".$this->name."</b>'s attack was evaded!</p>";

				if($this->health <= $this->maxHealth*20/100)
				{
					$this->dmg /= 2;
				}
				return;
			}

			if($this->health <= $this->maxHealth*20/100)
			{
				$this->dmg /= 2;
			}

			echo "<p><b>".$this->name."(".$this->health."HP, ".$this->mana."MP)"."</b> took ".$damage."HP from <b>".$target->name."(".$target->health."HP)"."</b>!</p>";
		}

		protected function special($target)
		{
			if($this->mana <= 0)
			{
				$this->mana = 0;
				return;
			}

			if($target->health <= 0)
			{
				$target->health = 0;
				return;
			}

			echo "<p><b>".$this->name."(".$this->health."HP, ".$this->mana."MP)"."</b> used <b>".$this->specialName."</b>!</p>";

			$this->attack($target);
			$this->attack($target);
			$this->mana -= 6;
		}
	}
?>