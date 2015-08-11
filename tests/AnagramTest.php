<?php 
	require_once "src/Anagram.php";
	
	class AnagramTest extends PHPUnit_Framework_TestCase
	{
		function testSimpleAnagram()
		{
			//Arrange
			$test = new Anagram;
			$inputWord = "ear";
			$inputList = array("dog", "bat", "era");
			
			//Act
			$result = $test->checkAnagram($inputWord, $inputList);
			
			$answer = array("era");
			//Assert
			$this->assertEquals($answer, $result);
			
		}
	}
?>