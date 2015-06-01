<?php
require_once __DIR__ . '/vendor/autoload.php';

function solution($A) {
    $sumBefore  = $A[0];
    $sumAfter  = array_sum($A) - $sumBefore;
    $smallestDifference = abs($sumBefore - $sumAfter);

    $i = 1;
    while ($i < count($A) - 1) {
        $sumBefore += $A[$i];
        $sumAfter -= $A[$i];
        $difference = abs($sumBefore - $sumAfter);

        if ($difference < $smallestDifference){
            $smallestDifference = $difference;
        }
        $i++;
    }
    return $smallestDifference;
}


class SolutionTest extends \PHPUnit_Framework_TestCase {

	public function testExampleInput() {
		$this->assertEquals(1, solution(array(3, 1, 2, 4, 3)));
	}

	public function testPair() {
		$this->assertEquals(2000, solution(array(-1000, 1000)));
	}

	public function testNegative() {
		$this->assertEquals(3, solution(array(-10, -5, -3, -4, -5)));
	}
}