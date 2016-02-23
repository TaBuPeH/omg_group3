<?php
	class Vehicle
	{
		private $color;
		private $fuel;
		private $position = 0;
		
		public function __construct($a, $b)
		{
			$this->fuel = $a;
			$this->color = $b;
		}
		
		public function move($distance)
		{
			$this->fuel = $this->fuel - $distance/10; 
			$this->position = $this->position + $distance; 
		}
	}
?>