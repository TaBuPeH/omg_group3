<?php

// database Handle
mysql_connect('localhost','root','');
mysql_select_db('group1');

mysql_query("SET NAMES 'utf8'");

$q = "SELECT * FROM `products` WHERE id%2=0 and id>3";
$q2 = "INSERT INTO `products` (`name`,`price`) VALUES ('test','3'),('test2','4')";
$q3 = "UPDATE `products` SET `price`=30,`quantity`=20 WHERE `name` = 'Домати' ";
$q4 = "UPDATE `products` SET `price`=10,`quantity`=20 WHERE `id` = '3' ";
$q5 = "UPDATE `products` SET `price`=40,`quantity`=30 WHERE `name` LIKE '%дом%'";

$q6 = "DELETE FROM `products` ";


$q = "SELECT * FROM `products` INNER JOIN `shop_products` ON (`products`.`id` = `shop_products`.`product_id`) INNER JOIN `shops` ON (`shops`.`id` = `shop_products`.`shop_id`)";

$q = "SELECT `products`.*,`shop_products`.`quantity`,`shops`.`id` AS `shop_id`, `shops`.`city`, `shops`.`address`  FROM `products` 
INNER JOIN `shop_products` ON (`products`.`id` = `shop_products`.`product_id`)
INNER JOIN `shops` ON (`shops`.`id` = `shop_products`.`shop_id`)";
$result = mysql_query($q);

echo "<pre>";

$info = array();
while(   $row = mysql_fetch_assoc($result)    )
{
	$info[] = $row;
}

print_r($info);
