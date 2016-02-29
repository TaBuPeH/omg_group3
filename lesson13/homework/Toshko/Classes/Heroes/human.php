<?php 

	require_once("Classes/lifeform.php");

	class Hooman extends LifeForm
	{
		private $item;

		public function __construct($name, $dmg, $armor, $mana, $health, $critChance, $speed, $evasion, $item)
		{
			$this->type = "Hooman";
			$this->attackName = "Normal Attack";
			$this->specialName = "Smoke Weed";
			$this->item = $item;

			if($item == "Zerzolar's Blade") 
			{
				$dmg += 20;
		        $critChance += 15;
		        if($critChance >= 100)
		        {
		        	$critChance = 100;
		        }
			}

			else if($item == "Saitama's Cape") 
			{
				$evasion += 40;
		        if($evasion >= 100)
		        {
		        	$evasion = 100;
		        }
			}

			else if($item == "Mordekaizer's Armor") 
			{
				$armor += 30;
			    $health += 50;
			}

			else if($item == "Gandalf's Robe") 
			{
				$mana += 100;
			}

			else if($item == "Hermes' Boots") 
			{
				$speed += 1;
			}

			else
			{
				$this->item = "none";
			}

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

			if($this->health <= 0)
			{
				$this->health = 0;
				return;
			}

			$heal = Rand(1, 30);

			if( !($this->health + $heal >= $this->maxHealth))
			{
				$this->health += $heal;
			}
			else
			{
				$heal = $this->health + $heal - $this->maxHealth;
				$this->health = $this->maxHealth;
			}

			echo "<p><b>".$this->name."(".$this->health."HP, ".$this->mana."MP, ".$this->armor."Armor)"."</b> used <b>".$this->specialName."</b>, got high and healed himself with ".$heal."HP!</p>";
			
			$this->mana -= 5;
		}
	}
?>