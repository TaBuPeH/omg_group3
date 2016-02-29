<?php 
	session_start();
	require_once("Classes/lifeform.php");

	class OnePunchMan extends LifeForm
	{
		public function __construct()
		{
			$this->name = "Saitama";
			$this->type = "God";
			$this->attackName = "Normal Punch";
			$this->dmg = "∞";
			$this->armor = "∞";
			$this->mana = 0;
			$this->health = "∞";
			$this->maxHealth = "∞";
			$this->critChance = 100;
			$this->speed = "∞";
			$this->evasion = 100;
		}

		public function attack($target)
		{
			$this->health = "∞";
			
			if(!$_SESSION['hasAudio'])
			{
				echo "<audio autoplay loop>
						 <source src='OPM/OPM.mp3' type='audio/mpeg'>
					  </audio>";
				$_SESSION['hasAudio'] = 1;
			}
			echo 	"<style>body,
					html
					{
						background-image: url(OPM/OPM.jpg);
						background-attachment: fixed;
						background-size: cover;
						background-position: 20% 80%;
					}
					
					*
					{
						color: #fff;
						text-shadow:
					    -1px -1px 0 #000,
					    1px -1px 0 #000,
					    -1px 1px 0 #000,
					    1px 1px 0 #000; 
					}</style>";

			echo "<div class='specialDiv'></div><p><b>".$this->name."(".$this->health."HP, ".$this->armor."Armor, ".$this->mana."MP)"."</b> used <b>".$this->attackName."</b>!</p>";

			$target->health = 0;

			echo "<p><b>".$this->name."(".$this->health."HP, ".$this->armor."Armor, ".$this->mana."MP)"."</b> took ".$target->maxHealth."HP from <b>".$target->name."(".$target->health."HP, ".$target->armor."Armor)</b> and instantly killed him with one punch!</p>";
		}
	}
?>