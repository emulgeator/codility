<?php
require_once __DIR__ . '/vendor/autoload.php';


function solution($N, $A){
	$condition = $N + 1;
	$maximum = 0;
	$lastUpdated = 0;
	$counters = array();
	$arrayLength = count($A);

	for ($i = 0; $i < $arrayLength; $i++) {
		if ($A[$i] == $condition) {
			$lastUpdated = $maximum;
		}
		else {
			$position = $A[$i] - 1;
			if (!isset($counters[$position])) {
				$counters[$position] = 0;
			}
			if ($counters[$position] < $lastUpdated) {
				$counters[$position] = $lastUpdated + 1;
			}
			else {
				$counters[$position]++;
			}

			if ($counters[$position] > $maximum) {
				$maximum = $counters[$position];
			}
		}
	}

	for ($i = 0; $i < $N; $i++) {
		if (!isset($counters[$i])) {
			$counters[$i] = 0;
		}
		if ($counters[$i] < $lastUpdated) {
			$counters[$i] = $lastUpdated;
		}
	}

	return $counters;
}


class SolutionTest extends \PHPUnit_Framework_TestCase {

	public function testExampleInput() {
		$array = array(3, 4, 4, 6, 1, 4, 4);
		$expectedResult = array(3, 2, 2, 4, 2);
		$this->assertEquals($expectedResult, solution(5, $array));
	}

}