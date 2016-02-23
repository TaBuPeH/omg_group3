<?php
	require_once("plane.php");
	class PassPlane extends Plane
	{
		private $seats;
		private $passengers = 0;
		
		public function __construct($a,$b,$mod,$se)
		{
			$this->seats = $se;
			parent::__construct($a,$b,$mod);
		}

		public function loadPeople($people)
		{
			if( $this->passengers + $people > $this->seats)
			{
				return;
			}

			$this->passengers += $people;
		}

		public function unloadPeople($people)
		{
			if( $this->passengers - $people < 0)
			{
				return;
			}

			$this->passengers -= $people;
		}
	}
?>