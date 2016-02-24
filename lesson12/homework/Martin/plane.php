<?php

	require_once("vehicle.php");

	class Plane extends vehicle
	{
		public $brand;
		public $model;
		public $capacitance;

		public function __construct ($color, $fuel, $brand, $model, $capacitance)
		{
			$this->brand = $brand;
			$this->model = $model;
			$this->capacitance = $capacitance;

			parent::__construct($color, $fuel);
		}

	}

?>	