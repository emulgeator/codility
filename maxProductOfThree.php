<?php
require_once __DIR__ . '/vendor/autoload.php';


function solution($A) {
	sort($A);
	$arrayLength = count($A);

	$productFromTheEnd = $A[$arrayLength - 1] * $A[$arrayLength - 2] * $A[$arrayLength - 3];
	$productFromTheBeginning = $A[0] * $A[1] * $A[$arrayLength - 1];

	return $productFromTheEnd < $productFromTheBeginning ? $productFromTheBeginning : $productFromTheEnd;
}


class SolutionTest extends \PHPUnit_Framework_TestCase {

	public function testExampleInput() {
		$a = array(-3, 1, 2, -2, 5, 6);

		$this->assertEquals(60, solution($a));
	}

	public function testSimple() {
		$a = array(1, 2, 3);

		$this->assertEquals(6, solution($a));
	}

	public function testNegative() {
		$a = array(-10, -5, 1, 2, 3);

		$this->assertEquals(150, solution($a));
	}

}