

<?php
	
	require_once("car.php");
	require_once("truck.php");
	require_once("taxi.php");
	require_once("plane.php");
	
	// $vehicle = new Vehicle(20,'red');
	// echo "<pre>";
	// print_r($vehicle);
	
	
	// $car = new Car(30, 'blue', 3);
	// echo "<pre>";
	// print_r($car);
	
	
	// $truck = new Truck(50, 'Green', 100 , 10);
	// echo "<pre>";
	// print_r($truck);
	
	// 		   // fuel, color, number , perKm, startingMoney, seats
	// $taxi = new Taxi(30, 'Black & Yellow','6665', '0.65', 0 , 4);
	// $taxi->move(10);
	
	// echo "<pre>";
	// print_r($taxi);

	//------------------------------------------------------------------------------------------------//

					// fuel , color , capacity , load
	$truck = new Truck( 50 , 'Yellow' , 100 , 10);
	echo "<pre>";
	print_r($truck);

	$truck->load(20);
	echo "<pre>";
	print_r($truck);

	$truck->unload(10);
	echo "<pre>";
	print_r($truck);




	$car = new Car( 80 , 'black' , 4 , 1);
	echo "<pre>";
	print_r($car);

	$car->loadPassengers(2);
	echo "<pre>";
	print_r($car);

	$car->unloadPassengers(1);
	echo "<pre>";
	print_r($car);



	$plane =  new Plane( 1000 , "gray" , "boeing" , "747" , 300 );
	echo "<pre>";
	print_r($plane);

?>