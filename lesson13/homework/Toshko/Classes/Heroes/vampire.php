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

			$critDmg = 0;
			$damage = 0;

			echo "<p><b>".$this->name."(".$this->health."HP, ".$this->armor."Armor, ".$this->mana."MP)"."</b> used <b>".$this->attackName."</b>!</p>";

			if( Rand(1, 100) <= $this->critChance ) 
			{
				$critDmg += $this->dmg / 2;
			}

			if( !(Rand(1, 100) <= $this->evasion) )
			{
				if($target->armor <= 0)
				{
					$target->armor = 0;

					$damage = $this->dmg + $critDmg;
					$target->health -= $this->dmg + $critDmg;

					if($target->health < 0) 
					{
						$target->health = 0;
					}

					echo "<p><b>".$this->name."(".$this->health."HP, ".$this->armor."Armor, ".$this->mana."MP)"."</b> took ".$damage."HP from <b>".$target->name."(".$target->health."HP, ".$target->armor."Armor)</b>!</p>";
				}
				else
				{
					$damage = $this->dmg + $critDmg;
					$target->armor -= $this->dmg + $critDmg;

					if($target->armor < 0) 
					{
						$target->armor = 0;
					}
					
					echo "<p><b>".$this->name."(".$this->health."HP, ".$this->mana."MP)"."</b> took ".$damage."Armor from <b>".$target->name."(".$target->health."HP, ".$target->armor."Armor)</b>!</p>";
				}			}
			else
			{
				echo "<p><b>".$this->name."</b>'s attack was evaded!</p>";
				return;
			}
		}

		protected function special($target)
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