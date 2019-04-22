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
        $expected = 1 - 2 + 3 - 4 + 5;
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

    public function testFactorialBigInt()
    {
        $num = 30;
        $expected = "265252859812191058636308480000000";
        $this->assertEquals(
            $expected,
            Numbers::factorialOfLarge($num)
        );
    }

    public function testAmicableNumbersUpTo300()
    {
        $limit = 300;
        $expected = [[220, 284]];
        $this->assertEquals(
            $expected,
            Numbers::findAmicableNumbersUpTo($limit)
        );
    }

    public function testGenerateAbundantNumbers()
    {
        $limit = 30;
        $expected = [12, 18, 20, 24, 30];
        $this->assertEquals(
            $expected,
            Numbers::generateAbundantNumbers($limit)
        );
    }

    public function testGetRecurringPartOfDecimal()
    {
        $numerator = 1;
        $denominator = 7;
        $expected = "142857";
        $this->assertEquals(
            $expected,
            Numbers::getRecurringPartOfDecimal($numerator, $denominator)
        );
    }
}
