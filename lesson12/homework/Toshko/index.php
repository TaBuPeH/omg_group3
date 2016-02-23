<?php	
	require_once("Vehicles/Cars/cars.php");
	require_once("Vehicles/Trucks/truck.php");
	require_once("Vehicles/Cars/taxi.php");
	require_once("Vehicles/Planes/cargo_plane.php");
	require_once("Vehicles/Planes/passenger_plane.php");
	
	$vehicle = new Vehicle(20,'red');
	echo "<pre>";
	print_r($vehicle);
	
	$car = new Car(30, 'blue', 4);
	$car->loadPeople(4);
	$car->move(20);
	$car->unloadPeople(2);
	echo "<pre>";
	print_r($car);
	
	$truck = new Truck(50, 'Green');
	$truck->loadCargo(40);
	$truck->move(10);
	$truck->unloadCargo(25);
	echo "<pre>";
	print_r($truck);
	
	$taxi = new Taxi(30, 'Black & Yellow','6665', '0.65', 0 , 4);
	$taxi->move(10);
	echo "<pre>";
	print_r($taxi);

	$cargoPlane = new CargoPlane(50, 'white', 'AN-225');
	$cargoPlane->loadCargo(100);
	$cargoPlane->move(40);
	$cargoPlane->unloadCargo(100);
	echo "<pre>";
	print_r($cargoPlane);

	$passPlane = new PassPlane(50, 'white', 'AN-225', 120);
	$passPlane->loadPeople(120);
	$passPlane->move(20);
	$passPlane->unloadPeople(120);
	echo "<pre>";
	print_r($passPlane);
?>