<?php

require_once("vehicle.php");

class Car extends Vehicle
{
	public $seats;
	public $taken_seats;
	
	public function __construct($fuel,$color,$seats,$taken_seats)
	{
		$this->seats = $seats;
		$this->taken_seats = $taken_seats;
		parent::__construct($fuel,$color);
	}

	public function loadPassengers($passangers)
	{
		if ( ($this->seats-$this->taken_seats) >= $passangers) 
		{
			$this->taken_seats += $passangers;
		}
	}

	public function unloadPassengers($passangers)
	{
		if ( $this->seats >= $passangers)
		{
			$this->taken_seats -= $passangers;
		}
		else
		{
			$this->taken_seats = 0;
		}

	}

}
?>