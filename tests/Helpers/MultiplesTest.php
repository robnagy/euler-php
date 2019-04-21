<?php

use App\Helpers\Multiples;

class MultiplesTest extends TestCase
{
    public function testMultiplesOfFunction()
    {
        $num = 1;
        $limit = 3;
        $expected = [1, 2, 3];
        $this->assertEquals(
            $expected,
            Multiples::multiplesOf($num, $limit)
        );
    }

    public function testSumOfMultiplesOfTwoNumbers()
    {
        $int1 = 3;
        $int2 = 5;
        $limit = 2000;
        $expected = 933668;
        $this->assertEquals(
            $expected,
            Multiples::sumOfMultiples($int1, $int2, $limit)
        );
    }

    public function testLowestCommonMultipleOfNumbersTill10()
    {
        $limit = 10;
        $expected = 2520;
        $this->assertEquals(
            $expected,
            Multiples::lowestCommonMultiple($limit)
        );
    }
}
