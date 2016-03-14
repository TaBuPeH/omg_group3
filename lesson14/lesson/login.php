<?php
	session_start();
	
	$user[0]['username'] = 'valeri';
	$user[0]['password'] = 'malkokote';
	$user[0]['numberOfWomen'] = 0;
	$user[0]['numberOfKifli'] = 0;
	
	
	$user[1]['username'] = 'joro';
	$user[1]['password'] = 'goliamokote';
	$user[1]['numberOfWomen'] = 5;
	$user[1]['numberOfKifli'] = 0;
	
	echo "<pre>";
	echo 'POST';
	print_r($_POST);

	print_r($user);
	
	$ourLoggedUser = array();
	
	foreach($user as $k=>$value)
	{
		if($value['username'] == $_POST['user']) 
		{
			if($value['password'] == $_POST['pass'])
			{
				$ourLoggedUser = $value;
			}
		}
	}
	
	$_SESSION['user'] = $ourLoggedUser;
 	print_r($_SESSION);
?>

