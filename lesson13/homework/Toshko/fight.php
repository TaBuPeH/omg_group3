<?php
	function fight(&$fighter1, &$fighter2)
	{
		$round = 1;

		echo "<p>Let the battle between <b>".$fighter1->getName()."(".$fighter1->getHealth().")"."</b> the ".$fighter1->getType()." and <b>".$fighter2->getName()."(".$fighter2->getHealth().")"."</b> the ".$fighter2->getType()." begin!!!</p>";


		if($fighter1->getSpeed() == "∞" && $fighter2->getSpeed() != "∞")
		{
			$first = "fighter1";
			$second = "fighter2";
			echo "<p><b>".$fighter1->getName()."</b> will start first!</p>";
		}
		else if($fighter2->getSpeed() == "∞" && $fighter1->getSpeed() != "∞")
		{
			$first = "fighter2";
			$second = "fighter1";
			echo "<p><b>".$fighter2->getName()."</b> will start first!</p>";
		}
		else if($fighter1->getSpeed() > $fighter2->getSpeed())
		{
			$first = "fighter1";
			$second = "fighter2";
			echo "<p><b>".$fighter1->getName()."</b> will start first!</p>";
		}
		else if($fighter1->getSpeed() < $fighter2->getSpeed())
		{
			$first = "fighter2";
			$second = "fighter1";
			echo "<p><b>".$fighter2->getName()."</b> will start first!</p>";
		}
		else
		{
			if(Rand(0, 1) == 0)
			{
				$first = "fighter1";
				$second = "fighter2";
				echo "<p><b>".$fighter1->getName()."</b> will start first!</p>";
			}
			else
			{
				$first = "fighter2";
				$second = "fighter1";
				echo "<p><b>".$fighter2->getName()."</b> will start first!</p>";
			}
		}

		while($fighter1->getIsAlive() == "true" && $fighter2->getIsAlive() == "true")
		{
			if($fighter1->getHealth() > 0 && $fighter2->getHealth() > 0)
			{
				echo "<div></div><p><b>Round ".$round."</b></p>";
			}
			if($round % 2 != 0)
			{
				if($first == "fighter1")
				{
					$fighter1->attack($fighter2);
					echo "<div class='specialDiv'></div>";
					$fighter2->attack($fighter1);
				}
				else
				{
					$fighter2->attack($fighter1);
					echo "<div class='specialDiv'></div>";
					$fighter1->attack($fighter2);
				}
				
			}

			else
			{
				if($first == "fighter1")
				{
					$fighter1->special($fighter2);
					echo "<div class='specialDiv'></div>";
					$fighter2->special($fighter1);
				}
				else
				{	
					$fighter2->special($fighter1);
					echo "<div class='specialDiv'></div>";
					$fighter1->special($fighter2);
				}
			}

			$round++;

			if($fighter1->getType() == "God")
			{
				echo "<div></div>";
				echo "<p><b>".$fighter2->getName()."</b> has <b>DIED</b>!</p>";
				echo "<p><b>".$fighter1->getName()."</b> is the <b>WINNER</b>!</p>";
				$fighter1->isAlive = "false";
				return;
			}

			if($fighter2->getType() == "God")
			{
				echo "<div></div>";
				echo "<p><b>".$fighter1->getName()."</b> has <b>DIED</b>!</p>";
				echo "<p><b>".$fighter2->getName()."</b> is the <b>WINNER</b>!</p>";
				$fighter1->isAlive = "false";
				return;
			}

			if($fighter1->getHealth() <= 0)
			{
				echo "<div></div>";
				echo "<p><b>".$fighter1->getName()."</b> has <b>DIED</b>!</p>";
				echo "<p><b>".$fighter2->getName()."</b> is the <b>WINNER</b>!</p>";
				$fighter1->isAlive = "false";
				return;
			}

			if($fighter2->getHealth() <= 0)
			{
				echo "<div></div>";
				echo "<p><b>".$fighter2->getName()."</b> has <b>DIED</b>!</p>";
				echo "<p><b>".$fighter1->getName()."</b> is the <b>WINNER</b>!</p>";
				$fighter2->isAlive = "false";
				return;
			}
			
			//if($round == 35)
			//{
			//	echo "<p>DRAW!</p>";
			//	return;
			//}
		}
	}
?>