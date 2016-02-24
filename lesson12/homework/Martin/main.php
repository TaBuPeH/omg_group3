<?php
	
	require_once("car.php");
	require_once("truck.php");
	require_once("taxi.php");
	require_once("plane.php");

	
	// $vehicle = new Vehicle(20,'red');
	// echo "<pre>";
	// print_r($vehicle);


			   // fuel, color, number , perKm, startingMoney, seats
	// $taxi = new Taxi(30, 'Black & Yellow','6665', '0.65', 0 , 4);
	// $taxi->move(10);
	
	// echo "<pre>";
	// print_r($taxi);

	
	
	$car = new Car(30, 'red', 3, 1);
	echo "<pre>";
	print_r($car);

	$car->loadPassengers(2);
	echo "<pre>";
	print_r($car);

	$car->unloadPassengers(1);
	echo "<pre>";
	print_r($car);

	
	$truck = new Truck(50, 'blue', 150, 10);
	echo "<pre>";
	print_r($truck);

	$truck->loadTruck(20);
	echo "<pre>";
	print_r($truck);

	$truck->unloadTruck(10);
	echo "<pre>";
	print_r($truck);


	$plane =  new Plane( 1000 , "gray" , "Бoeing" , "767" , 350 );
	echo "<pre>";
	print_r($plane);
	
?>