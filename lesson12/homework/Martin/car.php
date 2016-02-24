<?php

require_once("vehicle.php");

class Car extends Vehicle
{
	public $seats;
	public $occupied_seats;

	public function __construct($fuel, $color, $seats, $occupied_seats)
	{
		$this->seats = $seats;
		$this->occupied_seats = $occupied_seats;
		parent::__construct($fuel, $color);
	}

	public function loadPassengers($passengers)
	{
		if ($this->seats - $this->occupied_seats >= $passengers)
		{
			$this->occupied_seats = $this->occupied_seats + $passengers;
		}
	}

	public function unloadPassengers($passengers)
	{
		if ( $this->seats >= $passengers)
		{
			$this->occupied_seats = $this->occupied_seats - $passengers;
		}
		else
		{
			$this->occupied_seats = 0;
		}
	}
}
?>