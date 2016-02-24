<?php

require_once("vehicle.php");

class Truck extends Vehicle
{
	public $load;
	public $capacity;

	public function __construct ($fuel, $color, $capacity, $load)
	{
		$this->capacity = $capacity;
		$this->load = $load;
		parent::__construct($fuel, $color);
	}

	public function loadTruck($load)
	{
		if( $this->load + $load <= $this->capacity )
		{
			$this->load += $load;
		}	
		
	}

	public function unloadTruck($unload)
	{
		if( $this->load >= $unload )
		{
			$this->load -= $unload;
		}	
		else
		{
			$this->load =0;
		}
		
	}
	
}
?>