<?php

// database Handle

require_once "db.class.php";



$db = new database();

$products = $db->fetchArray("SELECT * FROM `products`");
$shops = $db->fetchArray("SELECT * FROM `shops`");

$arr[0]['id'] = 4;
$arr[0]['username'] = 'pesho';

$arr[1]['id'] = null;
$arr[1]['username'] = 'ivan';

$arr[2]['username'] = 'joro';

$db->saveArray('users',$arr);
