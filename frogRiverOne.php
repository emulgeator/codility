<?php
require_once __DIR__ . '/vendor/autoload.php';


function solution($X, $A) {
	$positions = range(1, $X);

	foreach ($A as $time => $position) {
		if (array_key_exists($position - 1, $positions)) {
			unset($positions[$position - 1]);
		}

		if (empty($positions)) {
			return $time;
		}
	}

	return -1;
}


class SolutionTest extends \PHPUnit_Framework_TestCase {

	public function testExampleInput() {
		$array = array(
			0 => 1,
			1 => 3,
			2 => 1,
			3 => 4,
			4 => 2,
			5 => 3,
			6 => 5,
			7 => 4,
		);
		$this->assertEquals(6, solution(5, $array));
	}

}