<?php

	require_once 'src/Time.php';

	class ClassTest extends PHPUnit_Framework_TestCase
	{

		//** Start Hour Tests**//
		function test_getHourAngle_lessThanOne()
		{
		//Arrange
		$test_Time = new Time(0, 15);
		$hinput = 0;

		//Act
		$result = $test_Time->getHourAngle($hinput, 0);

		//Assert
		$this->assertEquals('Please enter a valid hour', $result);
		}

		function test_getHourAngle_greaterThan12()
		{
		//Arrange
		$test_Time = new Time(13, 15);
		$hinput = 13;

		//Act
		$result = $test_Time->getHourAngle($hinput, 0);

		//Assert
		$this->assertEquals('Please enter a valid hour', $result);
		}

		function test_getHourAngle_isNaN()
		{
		//Arrange
		$test_Time = new Time('butWhy', 0);

		//Act
		$result = $test_Time->getHourAngle($test_Time->getHour(), $test_Time->getMinute());

		//Assert
		$this->assertEquals('Please enter a number!', $result);
		}

		function test_getHourAngle_correctAngle()
		{
			//Arrange
			$test_Time = new Time(2, 15);

			//Act
			$result = $test_Time->getHourAngle($test_Time->getHour(), $test_Time->getMinute());

			//Assert
			$this->assertEquals(67.5, $result);
		}


		//** Start Minute Tests **//
		function test_getMinuteAngle_lessThanOne()
		{
		//Arrange
		$test_Time = new Time(2, 0);
		$minput = 0;

		//Act
		$result = $test_Time->getMinuteAngle($minput);

		//Assert
		$this->assertEquals('Please enter a valid minute', $result);
		}

		function test_getMinuteAngle_greaterThan59()
		{
		//Arrange
		$test_Time = new Time(2, 67);
		$minput = 67;

		//Act
		$result = $test_Time->getMinuteAngle($minput);

		//Assert
		$this->assertEquals('Please enter a valid minute', $result);
		}

		function test_getMinuteAngle_isNaN()
		{
		//Arrange
		$test_Time = new Time(2, 'butWhy');
		$minput = 'butWhy';

		//Act
		$result = $test_Time->getMinuteAngle($minput);

		//Assert
		$this->assertEquals('Please enter a number!', $result);
		}

		function test_getMinuteAngle_correctAngle()
		{
			//Arrange
			$test_Time = new Time(2, 15);

			//Act
			$result = $test_Time->getMinuteAngle($test_Time->getMinute());

			//Assert
			$this->assertEquals(90, $result);
		}
		//** ANGLE DIFF **//
		function test_angleDiff()
		{
			//Arrange
			$test_Time = new Time(2, 15);

			//Act
			$result = $test_Time->angleDiff();

			//Assert
			$this->assertEquals(22.5, $result);
		}

	}

?>
