<?php
	function Debug($obj)
	{
		echo "<pre>";
		print_r($obj);
		echo "</pre>";
	}

	require_once("Classes/Heroes/vampire.php");
	require_once("Classes/Heroes/werewolf.php");
	require_once("fight.php");

	//name, damage, armor, mana, health, critical chance(0-100%), speed(1-3), evasion(0-100%)
	$vamp = new Vampire("Vladimir", 15, 40, 100, 300, 10, 2, 50);
	$wolf = new Werewolf("Moon Moon", Rand(10, 20), 10, 50, 150, 60, 1.5, 25);

	Debug($vamp);
	Debug($wolf);

	fight($wolf, $vamp);
?>