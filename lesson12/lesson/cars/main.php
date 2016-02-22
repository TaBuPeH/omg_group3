<?php
	
	require_once("car.php");
	require_once("truck.php");
	require_once("taxi.php");
	
	$vehicle = new Vehicle(20,'red');
	echo "<pre>";
	print_r($vehicle);
	
	
	$car = new Car(30, 'blue', 3);
	echo "<pre>";
	print_r($car);
	
	
	$truck = new Truck(50, 'Green');
	echo "<pre>";
	print_r($truck);
	
			   // fuel, color, number , perKm, startingMoney, seats
	$taxi = new Taxi(30, 'Black & Yellow','6665', '0.65', 0 , 4);
	$taxi->move(10);
	
	echo "<pre>";
	print_r($taxi);
	
?>