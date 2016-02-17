<?php 
	
	require_once("vehicle.php");

	class Plane extends Vehicle 
	{

		
		public $model;
		public $cap;

		public function __construct ( $a , $b , $model , $cap )
		{
			$this->model = $model;
			$this->cap = $cap;

			parent::__construct($a , $b );
		}

	}


?>