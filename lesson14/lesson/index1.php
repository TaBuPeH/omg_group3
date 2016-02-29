<?php


// Abstract / Interface / Static /             Session

interface wheel
{
	 function rotate();
}

interface cog
{
	 function rotate();
}


class watch implements wheel, cog
{
	function rotate()
	{
		
	}
	
	
}

$w = new watch;

abstract class genericMachine
{
	protected $size;
	public $isRaining = false;
	abstract function move($km);
	
	public function todayIsRaining()
	{
		$this->isRaining = true;
	}
}


class klimatik extends genericMachine
{
	private $isOpen = 0;
	
	function move($km)
	{
		$this->isOpen = true;
	}
}

class automobile extends genericMachine
{
	protected $fuel;
	
	function loadFuel($amount)
	{
		$this->fuel = $amount;
	}
	
	function move($km)
	{
		$this->fuel = $this->fuel - $km/10;
	}
}


class taxi extends automobile
{
	
	private $money = 0;
	
	function move($km)
	{
		parent::move($km);
		
		$this->money = $km*0.65;
	}
	
}




$taxi = new taxi();



$auto = new automobile();

//$machine = new genericMachine();

class accountant
{
	 public static $lastDDS = 0;
	
	public static function applyDDS($money)
	{
		accountant::$lastDDS = $money*1.2;
		return $money*1.2;
	}
	
}

$x = 100;

$x = accountant::applyDDS($x) ;

echo "<pre>";
print_r($x);


