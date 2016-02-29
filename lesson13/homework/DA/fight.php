<?php
	require_once("Alien.php");
	require_once("Human.php");
	 function fight(&$fighter1,&$fighter2)
	{


		$round = 1;

		echo "<p>Let the battle between <b>".$fighter1->getName()."(".$fighter1->getHp().")"."</b> and <b>".$fighter2->getName()."(".$fighter2->getHp().")"."</b> the  begin!!!</p>";

		if($fighter1->GetLuck() > $fighter2->GetLuck())
		{
			$first = "fighter1";
			$second = "fighter2";
			echo "<p><b>".$fighter1->getName()."</b> will start first!</p>";
		}
		else if($fighter1->GetLuck() < $fighter2->GetLuck())
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
		
	while($fighter1->isAlive == "true" && $fighter2->isAlive == "true")
	{

		echo"<p><b>Round".$round."</b></p>";
	
	if($round % 2 != 0)
			{
				if($first == "fighter1")
				{
					$fighter1->attacks($fighter2);
					$fighter2->attacks($fighter1);
				}
				else
				{
					$fighter2->attacks($fighter1);
					$fighter1->attacks($fighter2);
				}
				
			}

			else
			{
				if($first == "fighter1")
				{
					$fighter1->special($fighter2);
					$fighter2->special($fighter1);
				}
				else
				{
					$fighter2->special($fighter1);
					$fighter1->special($fighter2);
				}
			}

			$round++;
			if($fighter1->getHp() <= 0)
			{
				echo "<br></br>";
				echo "<p><b>".$fighter1->getName()."</b> has <b>DIED</b>!</p>";
				echo "<p><b>".$fighter2->getName()."</b> is the <b>WINNER</b>!</p>";
				$fighter1->health=0;
				$fighter1->isAlive = "false";
				return;
			}

			if($fighter2->getHp() <= 0)
			{
				echo "<br></br>";
				echo "<p><b>".$fighter2->getName()."</b> has <b>DIED</b>!</p>";
				echo "<p><b>".$fighter1->getName()."</b> is the <b>WINNER</b>!</p>";
				$fighter2->health=0;
				$fighter2->isAlive = "false";
				return;
			}

}
}

?>