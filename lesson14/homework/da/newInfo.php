<?php
	session_start();
	
	
 	$_SESSION['user']['username'] = 'Petur';
 	$_SESSION['user']['password'] = 'Petur01';

 	print_r($_SESSION);

?>