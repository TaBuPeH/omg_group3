<?php
	function Debug($obj)
	{
		echo "<pre>";
		print_r($obj);
		echo "</pre>";
	}

	require_once("Alien.php");
	require_once("Human.php");
	require_once("fight.php");


	$Saitama = new Human(Rand(10,20),140,2,"Saitama");
	$Borus = new Alien(Rand(7,11),120,1,"Borus");

	Debug($Saitama);
	Debug($Borus);

	fight($Saitama, $Borus);
?>