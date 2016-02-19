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

		function getOnes($i)
		{
			$res = '';
			$numSplitRev = $this->numSplitRev();
			foreach($GLOBALS['ones'] as $key => $one){
				if ($numSplitRev[$i] == 0){
					return false;
				} elseif ($numSplitRev[$i] == $key){
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
				$res .= $GLOBALS['tens'][$numSplitRev[1]] . " ";
				$res .= $this->getOnes(0);
			}
			return $res;
		}

		function getHundreds()
		{
			$res = '';
			if($this->number % 100 == 0){
				return $this->getOnes(2) . " hundred";
			} else {
			$hundreds = $this->getOnes(2);
			$tens = $this->getTens();
			$res .= $hundreds . " hundred and " . $tens;
			}
			return $res;
		}

	}
 ?>
