<?php

require_once("vehicle.php");

class Car extends Vehicle
{
	public $seats;
	
	public function __construct($a,$b,$se)
	{
		$this->seats = $se;
		parent::__construct($a,$b);
	}
}
?>