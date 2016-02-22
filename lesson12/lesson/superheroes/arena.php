<?php



/*


//	1. Include needed files
	2. Create monsters
	3. Add 2 internal variables to hold monsters
	4. Create constructor to fill the 2 monsters
	5. create doBattle
	
*/




class Arena
{
	var $warrior1;
	var $warrior2;
	
	function __construct(&$x,&$y)
	{
		$this->warrior1 = $x;
		$this->warrior2 = $y;
	}
	
	
	function doBattle()
	{
		// warrior 1 = kraken speed 20
		// warrior 2 = superman speed 20
		// warr1 HP = 100
		// warr2 HP = 200
		$rounds = 0;

		while($this->warrior1->getStamina() > 0 && $this->warrior2->getStamina() > 0)
		{

			$this->sortFastest();
			
			$attack = 'doAttack'; 
			if($rounds % 2 == 0)
			{
				$attack = 'doSuperAttack';
			}
			
			if($this->warrior1->getIsAttacker()) {
				$this->{$attack}($this->warrior1, $this->warrior2);
			} else {
				$this->{$attack}($this->warrior2, $this->warrior1);
			}
			$rounds++;
		}
			
	}	

	function sortFastest()
	{
		// w1 = 20 /   w2 = 23
		if($this->warrior1->getSpeed() > $this->warrior2->getSpeed())
		{
			$this->warrior1->setIsAttacker(1);
			$this->warrior2->setIsAttacker(0);
		}
		elseif($this->warrior1->getSpeed() == $this->warrior2->getSpeed())
		{
			
			do{
				$randForW1 = rand(0,100);
				$randForW2 = rand(0,100);
			}
			while($randForW1 == $randForW2);
	
			if($randForW1 > $randForW2)
			{
		
				$this->warrior1->setIsAttacker(1);
				$this->warrior2->setIsAttacker(0);
			
			}
			else
			{
				
				$this->warrior1->setIsAttacker(0);
				$this->warrior2->setIsAttacker(1);
					
			}
		}
		else
		{
		
			$this->warrior1->setIsAttacker(0);
			$this->warrior2->setIsAttacker(1);
		
		
		}
	}
	
	
	function doSuperAttack(&$at, &$def) {
		$at->superAttack($def);
						
		if($def->getStamina())
		{
			$def->superAttack($at);
		}
	}
	
	function doAttack(&$at, &$def) {
		$at->attack($def);
						
		if($def->getStamina())
		{
			$def->attack($at);
		}
	}
}


