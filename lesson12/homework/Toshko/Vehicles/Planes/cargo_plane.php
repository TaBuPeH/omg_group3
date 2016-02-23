<?php
	require_once("plane.php");
	class CargoPlane extends Plane
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