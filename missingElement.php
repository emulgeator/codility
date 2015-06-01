<?php
require_once __DIR__ . '/vendor/autoload.php';


function solution($A) {
	$perfectArray = range(1, count($A) + 1);

	return array_sum($perfectArray) - array_sum($A);
}


class SolutionTest extends \PHPUnit_Framework_TestCase {

	public function testExampleInput() {
		$this->assertEquals(4, solution(array(2, 3, 1, 5)));
	}

}