<?php

require_once("vehicle.php");

class Car extends Vehicle
{
	public $seats;
	public $full;
	
	public function __construct($a,$b,$se,$full)
	{
		$this->seats = $se;
		$tihs->full =$full
		parent::__construct($a,$b);
	}
	public function loadPassengers($passengers)
	{
		if ($this->seats - $this->full >= $passengers)
		{
			$this->full = $this->full + $passengers;
		}
	}

	public function unloadPassengers($passengers)
	{
		if ( $this->seats >= $passengers)
		{
			$this->full = $this->full - $passengers;
		}
		else
		{
			$this->full = 0;
		}
	}
}
?>