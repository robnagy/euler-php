<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\Helpers\Multiples;
use App\Helpers\Arrays;
use App\Helpers\Fibonacci;

class HelpersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMultiplesOfFunction()
    {
        $this->assertEquals(
            [1,2,3], Multiples::multiplesOf(1, 3)
        );
    }

    public function testArrayMergeWithoutDuplicateValues()
    {
        $arr1 = [1,3,5,7,9];
        $arr2 = [2,4,6,8,10];
        $this->assertEquals(
            [1,3,5,7,9,2,4,6,8,10],
            Arrays::mergeValues($arr1, $arr2)
        );
    }

    public function testArrayMergeWithDuplicateValues()
    {
        $arr1 = [1,3,5,7,9];
        $arr2 = [1,2,4,6,8,9,10];
        $this->assertEquals(
            [1,3,5,7,9,2,4,6,8,10],
            Arrays::mergeValues($arr1, $arr2)
        );
    }

    public function testSumOfMultiplesOfTwoNumbers()
    {
        $int1 = 3;
        $int2 = 5;
        $limit = 2000;
        $this->assertEquals(
            933668,
            Multiples::sumOfMultiples($int1, $int2, $limit)
        );
    }

    public function testFibonacciGenerate()
    {
        $limit = 13;
        $expected = [1,2,3,5,8,13];
        $this->assertEquals(
            $expected,
            Fibonacci::generate($limit)
        );
    }

    public function testFilterArrayForEvenNumbers()
    {
        $array = [1,2,3,4,5,6,7,8,9];
        $expected = [2,4,6,8];
        $this->assertEquals(
            $expected,
            Arrays::filterForEvenNumbers($array)
        );
    }

    public function testFilterNonNumericArrayForEvenNumbers()
    {
        $array = [1,2,3,"4",5,"6six",7,8,9];
        $expected = [2,8];
        $this->assertEquals(
            $expected,
            Arrays::filterForEvenNumbers($array)
        );
    }
}
