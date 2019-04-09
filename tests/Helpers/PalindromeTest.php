<?php

use App\Helpers\Palindrome;

class PalindromeTest extends TestCase
{
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
}
