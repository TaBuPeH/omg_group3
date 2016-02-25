<?php

	function Debug($obj)
	{
		echo "<pre>";
		print_r($obj);
		echo "</pre>";
	}

	require_once("Classes/Heroes/vampire.php");
	require_once("Classes/Heroes/werewolf.php");

	//name, damage, mana, health, critical chance, speed
	$vamp = new Vampire("Vladimir", 10, 100, 300, 10, 2);
	$wolf = new Werewolf("Moon Moon", Rand(10, 20), 50, 150, 60, 1.5);

	Debug($vamp);
	Debug($wolf);

	LifeForm::fight($wolf, $vamp);
?>