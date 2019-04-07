<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\Helpers\Arrays;
use App\Helpers\Factors;
use App\Helpers\Fibonacci;
use App\Helpers\Multiples;
use App\Helpers\Palindrome;
use App\Helpers\SolutionHelper;
use App\Helpers\Numbers;
use App\Helpers\Strings;
use App\Helpers\Exponents;
use App\Helpers\Primes;

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

    public function testFirstXCharsOfString()
    {
        $string = "12345";
        $expected = "123";
        $this->assertEquals(
            $expected,
            Strings::firstXChars($string, 3)
        );
    }

    public function testLastXCharsOfString()
    {
        $string = "12345";
        $expected = "345";
        $this->assertEquals(
            $expected,
            Strings::lastXChars($string, 3)
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

    public function testModularExponentiation1()
    {
        $base = 4;
        $exponent = 13;
        $modulus = 497;
        $expected = 445;
        // $start_time = microtime(true);
        $this->assertEquals(
            $expected,
            Exponents::modularExponentiation1($base, $exponent, $modulus)
        );
        // $end_time = microtime(true);
        // $execution_time = ($end_time - $start_time);
        // echo PHP_EOL." Execution time of script = ".$execution_time." sec".PHP_EOL;
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

    public function testGeneratePrimes()
    {
        $count = 10;
        $expected = [2,3,5,7,11,13,17,19,23,29];
        $this->assertEquals(
            $expected,
            Primes::generatePrimes($count)
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

}
