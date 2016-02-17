<?php
	
	require_once("car.php");
	require_once("truck.php");
	require_once("taxi.php");
	require_once("plane.php");
	
	$vehicle = new Vehicle(20,'red');
	echo "<pre>";
	print_r($vehicle);
	
	
	$car = new Car(30, 'blue', 5);
	$car->loadPeople(4);
	$car->move(10);
	$car->unloadPeople(1);
	echo "<pre>";
	print_r($car);
	
	
	$truck = new Truck(50, 'Green');
	$truck->loadTovar(600);
	$truck->move(1000)
	$truck->unloadTovar(200);
	echo "<pre>";
	print_r($truck);
	
			   // fuel, color, number , perKm, startingMoney, seats
	$taxi = new Taxi(30, 'Black & Yellow','6665', '0.65', 0 , 4);
	$taxi->move(10);
	
	echo "<pre>";
	print_r($taxi);

	$plane = new Plane(50, 'Green', "Mig-29", 4);
	echo "<pre>";
	print_r($plane);


	
?>