<?php
	require_once("cars.php");
	class Taxi extends Car
	{
		private $number;
		private $money;
		private $price_per_km;
		
		public function __construct($a, $b , $num, $perKm, $mon, $se)
		{
			$this->number = $num;
			$this->price_per_km = $perKm;
			$this->money = $mon;
			
			parent::__construct($a, $b , $se);
		}
		
		public function move($distance)
		{
			$this->money  = $this->money + $distance*$this->price_per_km;
			parent::move($distance);
		}
	}
?>