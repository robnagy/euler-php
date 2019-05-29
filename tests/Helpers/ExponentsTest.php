<?php

use App\Helpers\Exponents;

class ExponentsTest extends TestCase
{
    public function testModularExponentiation1()
    {
        $base = 4;
        $exponent = 13;
        $modulus = 497;
        $expected = 445;
        $this->assertEquals(
            $expected,
            Exponents::modularExponentiation1($base, $exponent, $modulus)
        );
    }

    public function testSumOfPowerOfDigits()
    {
        $number = 1634;
        $power = 4;
        $expected = 1634;
        $this->assertEquals(
            $expected,
            Exponents::sumOfPowerOfDigits($number, $power)
        );
    }
}
