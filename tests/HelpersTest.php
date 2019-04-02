<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\Helpers\Arrays;
use App\Helpers\Factors;
use App\Helpers\Fibonacci;
use App\Helpers\Multiples;
use App\Helpers\Palindrome;
use App\Helpers\SolutionHelper;

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

    public function testGetPrimeFactors()
    {
        $int = 15;
        $expected = [3,5];
        $this->assertEquals(
            $expected,
            Factors::getPrimeFactors($int)
        );
    }

    public function testIsPalindromeWithOddPalindrome()
    {
        $palindrome = 'markram';
        $expected = true;
        $this->assertEquals(
            $expected,
            Palindrome::isPalindrome($palindrome)
        );
    }

    public function testIsPalindromeWithEvenPalindrone()
    {
        $palindrome = 'markkram';
        $expected = true;
        $this->assertEquals(
            $expected,
            Palindrome::isPalindrome($palindrome)
        );
    }

    public function testIsPalindromeWithNonPalindrone()
    {
        $palindrome = 10;
        $expected = false;
        $this->assertEquals(
            $expected,
            Palindrome::isPalindrome((string)$palindrome)
        );
    }

    public function testNumbersLargestPalindromeProduct()
    {
        $int1 = 99; $int2 = 99; $limit = 90;
        $expected = 9009;
        $this->assertEquals(
            $expected,
            Palindrome::largestPalindromeProduct($int1, $int2, $limit)
        );
    }

    public function testSolutionHelperSolutionExists()
    {
        $exists = 'BaseSolution.php';
        $expected = true;
        $this->assertEquals(
            $expected,
            SolutionHelper::solutionExists($exists)
        );
    }

    public function testSolutionHelperSolutionDoesNotExist()
    {
        $exists = 'Solutionx.php';
        $expected = false;
        $this->assertEquals(
            $expected,
            SolutionHelper::solutionExists($exists)
        );
    }

    public function testSolutionHelperMakeSolution()
    {
        $filename = 'testing.php';
        $filecontents = 'test';
        $expected = strlen($filecontents);
        $this->assertEquals(
            $expected,
            SolutionHelper::makeSolution($filename, $filecontents)
        );

        $filepath = SolutionHelper::PATH.'/'.$filename;
        $expected = file_get_contents($filepath);
        $this->assertEquals(
            $expected,
            $filecontents
        );
        unlink($filepath);
    }
}
