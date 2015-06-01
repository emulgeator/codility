<?php
require_once __DIR__ . '/vendor/autoload.php';


function solution($A) {
	sort($A);
	$min = 1;
	foreach ($A as $item) {
		if ($item == $min) {
			$min++;
		}
	}

	return $min;
}


class SolutionTest extends \PHPUnit_Framework_TestCase {

	public function testExampleInput() {
		$array = array(1, 3, 6, 4, 1, 2);
		$this->assertEquals(5, solution($array));
	}

	public function testSimple() {
		$array = array(2, 4);
		$this->assertEquals(1, solution($array));
	}

	public function testOnePositiveElement() {
		$array = array(1);
		$this->assertEquals(2, solution($array));
	}

	public function testOneNegativeElement() {
		$array = array(-1);
		$this->assertEquals(1, solution($array));
	}

	public function testNegativeToPositive() {
		$array = array(-3, -1, 3);
		$this->assertEquals(1, solution($array));
	}

	public function testNegative() {
		$array = array(-3, -2);
		$this->assertEquals(1, solution($array));
	}

	public function testExtreme() {
		$array = array(-1000, 1000);
		$this->assertEquals(1, solution($array));
	}

}