<?php

require_once('db.class.php');

echo "<pre>";



if(!isset($_SESSION['logged_user']))
{
	header('Location: login.php');
}
else
{
	print_r($_SESSION);
	exit;
}	