<?php 

	session_start();
	$_SESSION['user'] = $_POST['user'];
	$_SESSION['pass'] = $_POST['pass'];

	$user[0]['username'] = 'bager';
	$user[0]['password'] = '1234';
	$user[0]['number'] = 1;
	
	$user[1]['username'] = 'admin';
	$user[1]['password'] = 'admin';
	$user[1]['number'] = 2;

	foreach ($user as $key => $val) 
	{

		if($val['username'] == $_SESSION['user'] && $val['password'] == $_SESSION['pass'])
		{
			header("Location: change.php");
			$_SESSION['number'] = $val['number'];
			exit;
		}
	}

	unset($_SESSION);
	header("Location: index.php");
?>