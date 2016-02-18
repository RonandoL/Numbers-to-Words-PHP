<?php
	include 'data.php';

	 class NumbersToWords
		{
		private $number;

		function __construct($number_input)
		{
			$this->number = $number_input;
		}


		// function makeNumberWord()
		// {
		// 	// return something
		// }

		function getOnes()
		{
			$res = '';
			foreach($GLOBALS['ones'] as $key => $one){
				if ($this->number == $key){
					$res = $one;
				}
			} return $res;
		}

		function splitNum()
		{
			return str_split($this->number);
		}
		// function getTens()
		// {
		//
		// }

		function getNumber()
		{
			return $this->number;
		}

		function setNumber($number)
		{
			$this->number = number;
		}

	}
 ?>
