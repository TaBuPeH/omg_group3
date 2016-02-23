<?php
	require_once("./Vehicles/vehicle.php");
	class Car extends Vehicle
	{
		private $seats;
		private $passengers = 0;
		
		public function __construct($a,$b,$se)
		{
			$this->seats = $se;
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