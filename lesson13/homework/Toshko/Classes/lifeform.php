<?php

	class LifeForm
	{
		public $isAlive = "true";

		protected $name;
		protected $type;
		protected $attackName;
		protected $specialName;
		protected $dmg;
		protected $armor;
		protected $mana;
		protected $health;
		protected $critChance;
		protected $evasion;
		protected $speed;

		public function attack($target){}
		public function special($target){}

		public function attackBase($target)
		{
			if($this->health <= 0)
			{
				$this->health = 0;
				return;
			}

			if($this->armor <= 0)
			{
				$this->armor = 0;
			}

			if($target->health <= 0)
			{
				$target->health = 0;
				return;
			}

			if($target->armor <= 0)
			{
				$target->armor = 0;
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

		public function __construct($name, $dmg, $armor, $mana, $health, $critChance, $speed, $evasion)
		{
			$this->name = $name;
			$this->dmg = $dmg;
			$this->armor = $armor;
			$this->mana = $mana;
			$this->health = $health;
			$this->maxHealth = $health;
			$this->critChance = $critChance;
			$this->speed = $speed;
			$this->evasion = $evasion;
		}

		public function getIsAlive()
		{
			return $this->isAlive;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getAttackName()
		{
			return $this->attackName;
		}

		public function getSpecialName()
		{
			return $this->specialName;
		}

		public function getSpeed()
		{
			return $this->speed;
		}

		public function getHealth()
		{
			return $this->health;
		}

		public function getType()
		{
			return $this->type;
		}
	}
?>