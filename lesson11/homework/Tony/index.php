<html>
	<head>
		<title>Home</title>
	</head>
	<body>

		<?php
		$carsShop = Array(
			1 => Array 
			    (

					"brand" => "Alfa Romeo",
					"model" => Giulietta,
					"price" => "20 000",
					"description" => Array
					(
						"Engine" => "1.6",
						"Generations" => Array
					    (
							0 => "Power (hp) 170",
								1 => "Hatchback",
									2 => "Seats - 5"
						)
					)
			     ),

			2 => Array
			    (

					"brand" => "Audi",
					"model" => A3,
					"price" => "15 000",
					"description" => Array
					(
						"Engine" => "2.0",
						"Generations" => Array
						(
							0 => "Power (hp) 180",
								1 => "Cabriolet",
									2 => "Seats - 4"
						)
					)
				),

			3 => Array
			   (

					"brand" => "Mazda",
					"model" => 3,
					"price" => "18 000",
					"description" => Array
					(
						"Engine" => "2.2",
						"Generations" => Array
						(
							0 => "Power (hp) 150",
								1 => "	Hatchback",
									2 => "Seats - 5"
						)
					)
				),
					

			echo "<pre>";
				print_r($carsShop);
					echo "</pre>";

		?>

	</body>
</html>