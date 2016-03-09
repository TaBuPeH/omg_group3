<?php

require_once('db.class.php');
echo "<pre>";

$user = $_POST;

$hasError = 0;

foreach($user as $k=>$v)
{
	$user[$k] = trim($user[$k]);
}

if(strlen($user['username'])< 4)
{
	$hasError = 1;
}

$query = "SELECT * FROM `users` WHERE `users`.`username` = '".$user['username']."'";
$result = $db->fetchArray($query);
 
if(count($result) > 0)
{
	$hasError = 1;
}

if(strlen($user['password'])< 4)
{
	$hasError = 1;
}

if($user['password'] != $user['password_2'])
{
	$hasError = 1;
}



if(!$hasError)
{
	// md5 / sha1
	$user['password'] = md5($user['password']);	
	unset($user['password_2']);
	$db->saveArray("users", $user);
}
else
{
	echo "There is an error with your data";
	
}
