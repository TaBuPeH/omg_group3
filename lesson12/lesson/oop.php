<?php


/*
class automobile
{
	public $brand;
	public $color;
	
	public $seats;
	public $doors;
	
	public $year;
	public $price; 
	
	public $km = 0;
	
	public function move($distance)
	{
		//$car->km = $car->km + $distance
		//$car2->km = $car2->km + $distance
		$this->km = $this->km  + $distance; 
	}
}



$car = new automobile;

$car->brand = "maserati";
$car->color = "white";
$car->seats = 5;
$car->doors = 3;
$car->year = 2014;
$car->price = 107000;

$car->move(20);
$car->move(10);


$car2 = new automobile;

$car2->brand = "VW";
$car2->color = "Grey";
$car2->seats = 5;
$car2->doors = 5;
$car2->year = 1991;
$car2->price = 500;

$car2->move(20);

echo "<pre>";
print_r($car2);
*/

//exit;






class Vehicle
{
	public $color;
	public $fuel;
	public $position = 0;
	
	function __construct($a, $b)
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




class Car extends Vehicle
{
	public $seats;
	
}



class Truck extends Vehicle
{
	public $load;
	
}


$vehicle = new Vehicle(20,'red');
echo "<pre>";
print_r($vehicle);


$car = new Car(30, 'blue');
echo "<pre>";
print_r($car);


$truck = new Truck(50, 'Green');
echo "<pre>";
print_r($truck);



exit;





$cars[] = new Vehicle(20,'red');
$cars[] = new Vehicle(40,'white');
$cars[] = new Vehicle(60,'blue');
echo "<pre>";
print_r($cars);

foreach($cars as $currentKey=>$currentCar)
{
	$cars[$currentKey]->move(50);
}

echo "<pre>";
print_r($cars);
exit;








?>