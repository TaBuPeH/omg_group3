<?php 

	session_start();
	echo "<pre>";

	$_SESSION['number'] += 10;

	print_r($_SESSION);
?>
<a href="logout.php">Logout</a>