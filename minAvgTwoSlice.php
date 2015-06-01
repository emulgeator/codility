<?php
require_once __DIR__ . '/vendor/autoload.php';


function solution($A) {
	$arrayLength = count($A);
	$minAverage = ($A[0] + $A[1]) / 2;
	$minAveragePosition = 0;

	for ($i = 0; $i < $arrayLength - 2; $i++) {
		$currentItem = $A[$i];
		$nextItem = $A[$i + 1];
		$afterNextItem = $A[$i + 2];

		if (($currentItem + $nextItem) / 2 < $minAverage) {
			$minAverage = ($currentItem + $nextItem) / 2;
			$minAveragePosition = $i;
		}

		if (($currentItem + $nextItem + $afterNextItem) / 3 < $minAverage) {
			$minAverage = ($currentItem + $nextItem + $afterNextItem) / 3;
			$minAveragePosition = $i;
		}
	}

	if (($A[$arrayLength - 1] + $A[$arrayLength - 2]) / 2 < $minAverage) {
		$minAveragePosition = $arrayLength - 2;
	}

	return $minAveragePosition;
}



class SolutionTest extends \PHPUnit_Framework_TestCase {

	public function testExampleInput() {
		$a = array(4, 2, 2, 5, 1, 5, 8);

		$this->assertEquals(1, solution($a));
	}
}