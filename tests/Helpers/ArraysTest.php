<?php

use App\Helpers\Arrays;

class ArraysTest extends TestCase
{
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

    public function testArraySumPartial()
    {
        $array = [
            '11111111111',
            '22222222222',
            '33333333333',
            '44444444444',
            '55555555555'
        ];
        $limit = 3;
        $expected = 166;
        $this->assertEquals(
            $expected,
            Arrays::arraySumPartial($array, $limit)
        );
    }
}
