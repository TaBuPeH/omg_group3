<html>
	<head>
		<title>Homework</title>
	</head>
	<body>

		<?php
			$slaveShop = Array(
				1 => Array(
					"name" => "Billy",
					"age" => 28,
					"price" => "100.00$",
					"description" => Array(
						"Basic Description" => "Very polite!",
						"Basic Skills" => Array(
							0 => "Cotton Picker",
							1 => "Hoovering",
							2 => "Cleaning"
						)
					)
				),

				2 => Array(
					"name" => "John" ,
					"age" => 32,
					"price" => "200.00$",
					"description" => Array(
						"Basic Description" => "My hardest working slave!",
						"Basic Skills" => Array(
							0 => "Gardening",
							1 => "Cotton Picker",
							2 => "Labour Working"
						)
					)
				),

				3 => Array(
					"name" => "Mark" ,
					"age" => 23,
					"price" => "150.00$",
					"description" => Array(
						"Basic Description" => "My hardest working slave!",
						"Basic Skills" => Array(
							0 => "Cooking",
							1 => "Babysitting",
							2 => "Cotton Picker"
						)
					)
				)
			);

			echo "<pre>";
			print_r($slaveShop);
			echo "</pre>";

		?>

	</body>
</html>