<?php

	require_once('db.class.php');

	$q ="Select * from `products`";
	$products = $db->fetchArray($q);

	echo "<pre>";
	print_r($products);
?>