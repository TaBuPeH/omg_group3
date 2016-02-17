<?php

	require_once("vehicle.php");



	class Car extends Vehicle
	{
		public $seats;
		public $passengers = 0;
		
		public function __construct($a,$b,$seat)
		{
			$this->seats = $seat;
			parent::__construct($a,$b);
		}

		public function loadPeople($people)
		{
			if( $this->passengers + $people > $this->seats )
			{
				return;
			}

			$this->passengers += $people;
		}

		public function unloadPeople($people)
		{
			if( $this->passengers - $people < 0 )
			{
				return;
			}

			$this->passengers -= $people;
		}
	}

?>