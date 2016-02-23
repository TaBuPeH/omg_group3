<?php

require_once("vehicle.php");


	class Truck extends Vehicle
	{
		public $tovar = 0;

		public function loadTovar($crg)
		{
			$this->tovar += $crg;
		}

		public function unloadTovar($crg)
		{
			if($this->tovar - $crg < 0 )
			{
				return;
			}

			$this->tovar -= $crg;
		}
	}

?>