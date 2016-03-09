<?php

require_once('db.class.php');

$user = $_POST;


foreach($user as $k=>$v)
{
	$user[$k] = trim($user[$k]);
	$user[$k] = mysqli_real_escape_string($db->dbHandle, $user[$k]);
}

$query = "SELECT * FROM `users` WHERE `users`.`username` = '".$user['username']."'";

echo $query;

$result = $db->fetchArray($query);

if(count($result) > 0)
{
	if($result[0]['password'] == md5($user['password']))
	{
		$_SESSION['logged_user'] = $result[0];
		header("Location: index.php");
	}
	else
	{
		echo "try again";
	}
}

exit;
