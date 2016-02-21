<html>

<head>Martin's Homework</head>

<body>

	<?php
	
		$bookShop = Array(

			1 => Array(
				"name" => "Harry Potter",
				"author" => "J. K. Rowling",
				"price" => "140.00BGN",
				"description" => "You must've already read the books, you noob!",
				"attention" => Array(
						"Attention!" => "Don't be scared of the price, 7 books are included.",
						"books" => Array(
							1 => "Harry Potter and the Philosopher's Stone",
							2 => "Harry Potter and the Chamber of Secrets",
							3 => "Harry Potter and the Prisoner of Azkaban",
							4 => "Harry Potter and the Goblet of Fire",
							5 => "Harry Potter and the Order of the Phoenix",
							6 => "Harry Potter and the Half Blood Prince",
							7 => "Harry Potter and the Deathly Hallows"
							)
						)
				)

			2 => Array(
				"name" => "A Song of Ice and Fire",
				"author" => "George R. R. Martin",
				"price" => "100.00BGN",
				"description" => "The books are better, don't be fooled.",
				"attention" => Array(
						"Attention!" => "5 books are included.",
						"books" => Array(
							1 => "A Game of Thrones",
							2 => "A Clash of Kings",
							3 => "A Storm of Swords",
							4 => "A Feast for Crows",
							5 => "A Dance with Dragons"
							)
						)
				)

			3 => Array(
				"name" => "The Chronicles of Narnia",
				"author" => "Clive Staples Lewis",
				"price" => "150.00BGN",
				"description" => "The movies are three, but the books are seven, gotcha.",
				"attention" => Array(
						"Attention!" => "7 books are included.",
						"books" => Array(
							1 => "The Lion, the Witch and the Wardrobe",
							2 => "Prince Caspian",
							3 => "The Voyage of the Dawn Treader ",
							4 => "The Silver Chair",
							5 => "The Horse and His Boy",
							6 => "The Magician's Nephew",
							7 => "The Last Battle"
							)
						)
				)

			4 => Array(
				"name" => "Percy Jackson & the Olympians",
				"author" => "Rick Riordan",
				"price" => "100.00BGN",
				"description" => "Great fantasy books about a nerd who becomes cool, cause his father is Apollonius.",
				"attention" => Array(
						"Attention!" => "5 books are included.",
						"books" => Array(
							1 => "The Lightning Thief",
							2 => "The Sea of Monsters",
							3 => "The Titan's Curse",
							4 => "The Battle of the Labyrinth",
							5 => "The Last Olympian"
							)
						)
				)

			);

		echo "<pre>";
		print_r($bookShop);
		echo "</pre>";

		?>

</body>

</html>