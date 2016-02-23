<?php
	require_once("./Vehicles/vehicle.php");
	class Plane extends Vehicle
	{
		private $model;

		public function __construct($a,$b,$mod)
		{
			$this->model = $mod;
			parent::__construct($a,$b);
		}
	}
?>