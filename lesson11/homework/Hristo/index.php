<?php



	$videoteka = array (
			0 => array (

				"name" => "spider-man",
				"price" => "2.90",
				"avaible" => array (
					"taken" => "03.02",
					"toreturn" => "19.2"
				),
				"description" => array (
					"maindescription" => "great movie",
					"rating" => "5/5"
				)
			),
			1 => array (
				"name" => "batman",
				"price" => "3.90",
				"avaible" => array (
					"taken" => "05.02",
					"return" => "10.3"
				),
				"description" => array (
					"maindexcription" => "its fine",
					"torating" => "4.8/5"
				)				
			)
		);

	$videoteka[2]['name'] = "superman";
	$videoteka[2]['price'] = "3.00";
	$videoteka[2]['avaible']['taken'] = "12.04";
	$videoteka[2]['avaible']['toreturn'] = "29.04";
	$videoteka[2]['description']['maindescription'] = "good movie";
	$videoteka[2]['description']['rating'] = "4.9/5";


	echo "<pre>";
	print_r($videoteka);
	echo "</pre>";
?>
