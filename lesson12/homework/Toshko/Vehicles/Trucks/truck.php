<?php
	require_once("./Vehicles/vehicle.php");
	class Truck extends Vehicle
	{
		private $cargo = 0;

		public function loadCargo($crg)
		{
			$this->cargo += $crg;
		}

		public function unloadCargo($crg)
		{
			if($this->cargo - $crg < 0 )
			{
				return;
			}

			$this->cargo -= $crg;
		}
	}
?>