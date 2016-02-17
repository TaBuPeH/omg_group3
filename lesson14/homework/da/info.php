<?php
	session_start();
	
	$user[0]['username'] = 'Dancho';
	$user[0]['password'] = 'prodan4intora98';

	
	
	$user[1]['username'] = 'Petur';
	$user[1]['password'] = 'Chelsea';


	$user[2]['username'] = 'Losho_momiche04';
	$user[2]['password'] = 'GalaxytheBestparty00';

	
	$user[3]['username'] = 'PetioFitila';
	$user[3]['password'] = 'Neslushamnashte';


	$user[4]['username'] = 'Wikaigi_biemqko';
	$user[4]['password'] = 'Naduan01';

	
	$user[5]['username'] = 'JorkataBrat_nacepenabaka00';
	$user[5]['password'] = '20smbicarki';
	
	
	

	print_r($user);
	
	$Koiseelognal = array();
	
	foreach($user as $key=>$value)
	{
		if($value['username'] == $_POST['user']) 
		{
			if($value['password'] == $_POST['password'])
			{
				$Koiseelognal = $value;
			}
		}
	}
	
	$_SESSION['user'] = $ourLoggedUser;

?>