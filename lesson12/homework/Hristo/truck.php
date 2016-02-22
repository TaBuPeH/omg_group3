<?php

require_once("vehicle.php");

class Truck extends Vehicle
{
	public $capacity;	
	public $load;

	public function __construct( $fuel, $color , $capacity ,$load)
	{
		$this->capacity = $capacity;
		$this->load = $load;
		parent::__construct($fuel, $color);

	}
	
	 public function load($load)
	{
		if( $this->load + $load <= $this->capacity )
		{
			$this->load += $load;
		}	
		
	}

	 public function unload($unload)
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