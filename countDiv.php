<?php
require_once __DIR__ . '/vendor/autoload.php';


function solution($A, $B, $K) {
	if ($A < $K) {
		$startAt = $K;
	}
	else {
		$startAt = ceil($A / $K) * $K;
	}

	$result = (int)floor(($B - $startAt) / $K) + 1;

	if ($A <= 0) {
		$result++;
	}
	return $result;
}



class SolutionTest extends \PHPUnit_Framework_TestCase {

	public function testTest() {
		$this->assertEquals(2, solution(6, 15, 7));
	}

	public function testExampleInput() {
		$this->assertEquals(3, solution(6, 11, 2));
	}

	public function testOne() {
		$this->assertEquals(1, solution(2, 2, 2));
	}

	public function testMinimal() {
		$this->assertEquals(1, solution(0, 0, 7));
	}
}