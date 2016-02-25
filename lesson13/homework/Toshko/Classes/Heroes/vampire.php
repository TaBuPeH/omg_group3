<?php
	
	require_once("Classes/lifeform.php");
	
	class Vampire extends LifeForm
	{
		public function __construct($name, $dmg, $mana, $health, $critChance, $speed, $evasion)
		{
			$this->type = "Vampire";
			$this->attackName = "Normal Attack";
			$this->specialName = "Blood Sucking Attack";

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

			$critDmg = 0;
			$damage = 0;

			if( Rand(1, 100) <= $this->critChance ) 
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
				echo "<p><b>".$target->name."</b> evaded <b>".$this->name."</b>'s attack!</p>";
				return;
			}

			echo "<p><b>".$this->name."(".$this->health."HP, ".$this->mana."MP)"."</b> used <b>".$this->attackName."</b>!</p>";
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

			$damage = Rand(10, 30);

			$target->health -= $damage;
			if($target->health < 0) $target->health =0;
			
			$this->health += $damage;
			$this->mana -= 20;

			echo "<p><b>".$this->name."(".$this->health."HP, ".$this->mana."MP)"."</b> used <b>".$this->specialName."</b>!</p>";
			echo "<p><b>".$this->name."(".$this->health."HP, ".$this->mana."MP)"."</b> took ".$damage."HP from <b>".$target->name."(".$target->health."HP)"."</b>!</p>";
		}
	}
?>