<?php 
	session_start();

	$user[0]["username"] = "maikati";
	$user[0]["password"] = "123456";
	$user[0]["numberOfCats"] = "8";

	$user[1]["username"] = "babati";
	$user[1]["password"] = "654321";
	$user[1]["numberOfCats"] = "6";

	$logged = array();

	foreach ($user as $k => $value)
	 {
		if ( $value['username'] == $_POST['user'] && $value['password'] == $_POST['pass'] )
		{
			$logged = $value;
			$_SESSION['user'] = $logged;
			header("Location: info.php");
		}
	}

	header("Location: index.php");
 ?>