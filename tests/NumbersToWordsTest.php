<?php

	require_once 'src/NumbersToWords.php';

	class NumbersToWordsTest extends PHPUnit_Framework_TestCase
	{

		function test_numSplit()
		{
			$test_NumbersToWords = new NumbersToWords(19);
			// $input = 'beowulf';

			//Act
			$result = $test_NumbersToWords->numSplit();

			//Assert
			$this->assertEquals([1,9], $result);
		}

		function test_numSplitRev()
		{
			$test_NumbersToWords = new NumbersToWords(1900);
			// $input = 'beowulf';

			//Act
			$result = $test_NumbersToWords->numSplitRev();

			//Assert
			$this->assertEquals([0,0,9,1], $result);
		}


		function test_getOnes()
		{
		//Arrange
		$test_NumbersToWords = new NumbersToWords(5);


		//Act
		$result = $test_NumbersToWords->getOnes(0);

		//Assert
		$this->assertEquals('five', $result);
		}

		function test_getTens_10_through_19()
		{
		//Arrange
		$test_NumbersToWords = new NumbersToWords(19);

		//Act
		$result = $test_NumbersToWords->getTens();

		//Assert
		$this->assertEquals('nineteen', $result);
		}

		function test_getTens_multiples_of_ten()
		{
		//Arrange
		$test_NumbersToWords = new NumbersToWords(30);

		//Act
		$result = $test_NumbersToWords->getTens();

		//Assert
		$this->assertEquals('thirty ', $result);
		}

		function test_getTens_non_multiples_of_ten_over_19()
		{
		//Arrange
		$test_NumbersToWords = new NumbersToWords(99);

		//Act
		$result = $test_NumbersToWords->getTens();

		//Assert
		$this->assertEquals('ninety nine', $result);
		}

		function test_getHundreds_not_divisible_by_100_and_over_100_less_than_1000()
		{
			//Arrange
			$test_NumbersToWords = new NumbersToWords(123);

			//Act
			$result = $test_NumbersToWords->getHundreds();

			//Assert
			$this->assertEquals('one hundred and twenty three', $result);
		}

		function test_getHundreds_divisible_by_100_less_than_1000()
		{
			//Arrange
			$test_NumbersToWords = new NumbersToWords(100);

			//Act
			$result = $test_NumbersToWords->getHundreds();

			//Assert
			$this->assertEquals('one hundred', $result);
		}
	}

?>
