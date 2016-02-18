<?php

	require_once 'src/NumbersToWords.php';

	class NumbersToWordsTest extends PHPUnit_Framework_TestCase
	{

		function test_splitNum()
		{
			$test_NumbersToWords = new NumbersToWords(19);
			// $input = 'beowulf';

			//Act
			$result = $test_NumbersToWords->splitNum();

			//Assert
			$this->assertEquals([1,9], $result);
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

		// function test_getTens_10_through_19()
		// {
		// //Arrange
		// $test_NumbersToWords = new NumbersToWords(19);
		// // $input = 'beowulf';
		//
		// //Act
		// $result = $test_NumbersToWords->getTens();
		//
		// //Assert
		// $this->assertEquals('nineteen', $result);
		// }
	}

?>
