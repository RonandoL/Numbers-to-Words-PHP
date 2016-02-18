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
		// $input = 'beowulf';

		//Act
		$result = $test_NumbersToWords->getOnes();

		//Assert
		$this->assertEquals('five', $result);
		}

		function test_getTens_10_through_19()
		{
		//Arrange
		$test_NumbersToWords = new NumbersToWords(19);
		// $input = 'beowulf';

		//Act
		$result = $test_NumbersToWords->getTens();

		//Assert
		$this->assertEquals('nineteen', $result);
		}
	}

?>
