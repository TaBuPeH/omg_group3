<?php

	require_once('db.class.php');

	
	
	
	$info[0]['id'] = '0';
	$info[0]['name'] = 'tomatoes';
	$info[0]['price'] = '1.5';

	$info[1]['id'] = 0;
	$info[1]['name'] = 'cucumbers';
	$info[1]['price'] = 1;

	$info[2]['id'] = 13;
	$info[2]['name'] = 'potatoes';
	$info[2]['price'] = 0.8;

	$deleteName = 'bager';
	$searchName = 'name';
		
		
	$db->saveArray('products', $info);
	//$db->deleteRow('products', $info);
	//$db->deleteRow('products', $deleteName, $searchName);

	
	
	
	$q ="Select * from `products`";
	$products = $db->fetchArray($q);

	echo "<pre>";
	print_r($products);
?>