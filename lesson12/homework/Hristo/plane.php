<?php 
	
	require_once("vehicle.php");

	class Plane extends Vehicle 
	{

		public $brand;
		public $model;
		public $capacitet;

		public function __construct ( $fuel , $color , $brand , $model , $capacitet )
		{
			$this->model = $model;
			$this->brand = $brand;
			$this->capacitet = $capacitet;

			parent::__construct($fuel , $color );
		}

	}


?>