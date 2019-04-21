<?php

namespace App\Helpers;

class Palindrome
{
    /**
     * Checks if given string is a palindrome
     *
     * @param string $text
     * @return boolean
     */
    public static function isPalindrome(string $text): bool
    {
        $x = 0;
        $y = strlen($text) - 1;
        while ($x < $y) {
            if ($text[$x] !== $text[$y]) {
                return false;
            }
            $x++;
            $y--;
        }
        return true;
    }

    /**
     * Calculates the largest palindrome product of two integers,
     * starting with max values set by $num1 and $num2,
     * and subtracting each down to $limit.
     *
     * @param integer $num1
     * @param integer $num2
     * @param integer $limit
     * @return void
     */
    public static function largestPalindromeProduct(int $num1, int $num2, int $limit)
    {
        while ($num1 > $limit) {
            while ($num2 > $limit) {
                $result = $num1 * $num2;
                if (self::isPalindrome((string) $result)) {
                    return $result;
                }
                $num2--;
            }
            $num1--;
            $num2 = $num1;
        }
        return 0;
    }
}
