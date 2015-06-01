<?php
require_once __DIR__ . '/vendor/autoload.php';


function solution($A) {
	if (count(array_unique($A)) != count($A)) {
		return 0;
	}
	$perfectArray = range(1, count($A));

	return (array_sum($A) == array_sum($perfectArray)) ? 1 : 0;
}



class SolutionTest extends \PHPUnit_Framework_TestCase {

	public function testExampleInput() {
		$this->assertEquals(1, solution(array(4, 3, 1, 2)));
	}

	public function testNotPermutation() {
		$this->assertEquals(0, solution(array(4, 3, 1)));
	}

	public function testSameValues() {
		$this->assertEquals(0, solution(array(1, 1, 1)));
	}

	public function testAntiSum() {
		$this->assertEquals(0, solution(array(1, 3, 3, 3, 5)));
	}
}