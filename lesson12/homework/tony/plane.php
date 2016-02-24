<?php

    require_once("vehicle.php");

    class Plane extends vehicle
{

	public $brand;
	public $passengers;

	public function __construct ($a,$b,$brand,$passengers)
	{
		$this->brand = $brand;
		$this ->passengers = $passengers;


		parent :: __construct($a,$b)
	}
}


?>