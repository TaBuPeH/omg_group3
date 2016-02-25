<?php

	function Debug($obj)
	{
		echo "<pre>";
		print_r($obj);
		echo "</pre>";
	}

	require_once("Classes/Heroes/vampire.php");
	require_once("Classes/Heroes/werewolf.php");

	//name, damage, mana, health, critical chance(0-100%), speed(1-3), evasion(0-100%)
	$vamp = new Vampire("Vladimir", 10, 100, 300, 10, 2, 50);
	$wolf = new Werewolf("Moon Moon", Rand(10, 20), 50, 150, 60, 1.5, 25);

	Debug($vamp);
	Debug($wolf);

	LifeForm::fight($wolf, $vamp);
?>