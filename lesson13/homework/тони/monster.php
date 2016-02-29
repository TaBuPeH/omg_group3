<?php 

	require_once("lifeform.php");

	class Monster extends LifeForm
	{
		private $isEnraged;

		public function __construct($name, $dmg, $health, $isEnraged)
		{
			$this->isEnraged = $isEnraged;

			parent::__construct($name, $dmg, $health);
		}

		protected function attack($target)
		{
			if($this->health < 0 || $target->health < 0)
			{
				return;
			}

			$damage = $this->dmg;

			if($this->isEnraged == "true")
			{
				$damage += Rand(10, 15);
			}

			$target->health -= $damage;

			echo "<p>".$this->name." attacked ".$target->name." and took ".$damage."HP from him!</p>";

		}
	}
 ?>