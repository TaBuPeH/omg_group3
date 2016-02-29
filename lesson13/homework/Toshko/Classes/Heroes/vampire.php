<?php
	
	require_once("Classes/lifeform.php");
	
	class Vampire extends LifeForm
	{
		public function __construct($name, $dmg, $armor, $mana, $health, $critChance, $speed, $evasion)
		{
			$this->type = "Vampire";
			$this->attackName = "Normal Attack";
			$this->specialName = "Blood Sucking Attack";

			parent::__construct($name, $dmg, $armor, $mana, $health, $critChance, $speed, $evasion);
		}

		public function attack($target)
		{	
			$this->attackBase($target);
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

			$damage = Rand(10, 30);

			$target->health -= $damage;
			if($target->health < 0)
			{
				$target->health =0;
			}
			
			if( !($this->health + $damage >= $this->maxHealth))
			{
				$this->health += $damage;
			}
			else
			{
				$this->health = $this->maxHealth;
			}
			
			$this->mana -= 20;

			echo "<p><b>".$this->name."(".$this->health."HP, ".$this->armor."Armor,".$this->mana."MP)"."</b> used <b>".$this->specialName."</b>!</p>";
			echo "<p><b>".$this->name."(".$this->health."HP, ".$this->armor."Armor,".$this->mana."MP)"."</b> took ".$damage."HP from <b>".$target->name."(".$target->health."HP, ".$target->armor."Armor)"."</b>!</p>";
		}
	}
?>