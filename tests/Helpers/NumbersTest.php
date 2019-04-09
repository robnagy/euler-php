<?php

use App\Helpers\Numbers;

class NumbersTest extends TestCase
{
    public function testSumOfDigits()
    {
        $num = 1234;
        $expected = 10;
        $this->assertEquals(
            $expected,
            Numbers::sumOfDigits($num)
        );
    }

    public function testAlternatingSumOfDigits()
    {
        $num = 12345;
        $expected = 1-2+3-4+5;
        $this->assertEquals(
            $expected,
            Numbers::alternatingSumOfDigits($num)
        );
    }

    public function testSumOfSquares()
    {
        $limit = 10;
        $expected = 385;
        $this->assertEquals(
            $expected,
            Numbers::sumOfSquares($limit)
        );
    }

    public function testSquareOfSums()
    {
        $limit = 10;
        $expected = 3025;
        $this->assertEquals(
            $expected,
            Numbers::squareOfSums($limit)
        );
    }

    public function testProductOfDigits()
    {
        $num = 9989;
        $expected = 5832;
        $this->assertEquals(
            $expected,
            Numbers::productOfDigits($num)
        );
    }

    public function testEuclidsFormula()
    {
        $limit = 12;
        $expected = [
            'a' => 3,
            'b' => 4,
            'c' => 5,
        ];
        $this->assertEquals(
            $expected,
            Numbers::euclidsFormula($limit)
        );
    }

    public function testFactorialOf4()
    {
        $num = 4;
        $expected = 24;
        $this->assertEquals(
            $expected,
            Numbers::factorialOf($num)
        );
    }

    public function testLatticePathways9Blocks()
    {
        $blocks = 9;
        $expected = 20;
        $this->assertEquals(
            $expected,
            Numbers::latticePathways($blocks)
        );
    }
}
