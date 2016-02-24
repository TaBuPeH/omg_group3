<?php


class Vehicle
{
	
	public $color = 'blue';
	private $engine = '5000HP';
	protected $seats = 120;
	
	public function setSeats($s)
	{
		$this->seats = $s-1;
	}
	
	public function getSeats()
	{
		return $this->seats;
	}
	
	public function setColor($s)
	{
		$this->color = $s;
	}
	
	public function getColor()
	{
		return $this->color;
	}
	
	protected function setEngine()
	{
		$this->runEngine();
	}
	
	private function runEngine()
	{
		
	}
}

class Car extends Vehicle
{
	function setSeats($seats)
	{
		$this->seats = $seats;
		$this->setEngine();
	}
}

class Truck extends Vehicle
{
	function setSeats($seats)
	{
		$this->seats = $seats;
	}
}


$car = new Car();
$car->color = 'red';
$car->setEngine('2000');

echo "<pre>";
print_r($car);
exit;
$car->engine = '1000HP';



