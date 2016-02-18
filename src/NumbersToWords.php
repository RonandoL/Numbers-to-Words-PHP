<?php
	include 'data.php';

	 class NumbersToWords
		{
		private $number;

		function __construct($number_input)
		{
			$this->number = $number_input;
		}

		function getNumber()
		{
			return $this->number;
		}

		function setNumber($number)
		{
			$this->number = number;
		}


		function numSplit()
		{
			return str_split($this->number);
		}

		function numSplitRev()
		{
			$numSplit = $this->numSplit();
			return array_reverse($numSplit);
		}

		function getOnes()
		{
			$res = '';
			foreach($GLOBALS['ones'] as $key => $one){
				if ($this->number == $key){
					$res = $one;
				}
			} return $res;
		}

		function getTens()
		{
			$res = "";
			$numSplitRev = $this->numSplitRev();
			if($numSplitRev[1] == 1){
				$res = $GLOBALS['tens'][$this->number];
			} else {
				$res = $GLOBALS['tens'][$numSplitRev[1]];
			}
			return $res;
		}



	}
 ?>
