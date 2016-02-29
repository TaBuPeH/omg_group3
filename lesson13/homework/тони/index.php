<?php

	function Debug($obj)
	{
		echo "<pre>";
		print_r($obj);
		echo "</pre>";
	}

	require_once("monster.php");
	require_once("human.php");

	$human = new Human("Pesho", 15, 100, "true");
	$monster = new Monster("Hulk", 20, 150, "false");

	Debug($human);
	Debug($monster);

	LifeForm::fight($human, $monster);

	Debug($human);
	Debug($monster);
?>