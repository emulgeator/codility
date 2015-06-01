<?php
require_once __DIR__ . '/vendor/autoload.php';


function solution($A) {
	$passingCarCount = 0;
	$carHeadingEastCount = 0;

	foreach ($A as $car => $direction) {
		if ($direction == 0) {
			$carHeadingEastCount++;
			continue;
		}

		$passingCarCount += $carHeadingEastCount;

		if ($passingCarCount > 1000000000) {
			return -1;
		}
	}

	return $passingCarCount;
}


class SolutionTest extends \PHPUnit_Framework_TestCase {

	public function testExampleInput() {
		$a = array(0, 1, 0, 1, 1);

		$this->assertEquals(5, solution($a));
	}

	public function testOnlyToEast() {
		$this->assertEquals(0, solution(array(0, 0, 0)));
	}

	public function testOnlyToWest() {
		$this->assertEquals(0, solution(array(1, 1, 1)));
	}
}