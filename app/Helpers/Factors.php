<?php

namespace App\Helpers;

class Factors
{
    /**
     * Generates the prime factors of given $num
     *
     * @param integer $int
     * @return array
     */
    public static function getPrimeFactors(int $num) : array
    {
        $primeFactors = [];
        for ($x = 2; $x <= $num; $x++)
        {
            while ($num % $x === 0)
            {
                $primeFactors[$x] = 1;
                $num = $num / $x;
            }
        }
        $primeFactors = array_keys($primeFactors);
        return $primeFactors;
    }

    /**
     * Determines if $these integers are all factors of $num
     *
     * @param array $these
     * @param integer $num
     * @return boolean
     */
    public static function areTheseFactorsOf(array $these, int $num) : bool
    {
        $knownFactors = [];
        foreach ($these as $x)
        {
            if (! self::isXAFactor($x, $num, $knownFactors))
            {
                return false;
            }
            else
            {
                $knownFactors[$x] = 1;
            }
        }
        return true;
    }

    /**
     * Determines if $x is a factor of $num, either by checking
     * the specific function for $x, or by using a generic
     * prime factor function, or a manual calculation.
     *
     * @param integer $x
     * @param integer $num
     * @return boolean
     */
    public static function isXAFactor(int $x, int $num, array &$knownFactors = []) : bool
    {
        if (isset($knownFactors[$x])) return true;

        // Optimisations removed, too slow!
        // $method = 'is'.$x.'AFactor';
        // if (method_exists(Factors::class, $method)) {
        //     if (self::$method($num)) {
        //         $knownFactors[$x] = 1;
        //     };
        // }

        $primeFactors = self::getPrimeFactors($x);

        // force manual calculation on primes and composite
        // numbers that have a single prime factor
        if (count($primeFactors) > 1)
        {
            foreach ($primeFactors as $factor)
            {
                if ($factor !== $num)
                {
                    if (!self::isXAFactor($factor, $num))
                    {
                        return false;
                    } else
                    {
                        $knownFactors[$factor] = 1;
                    }
                }
            }
        }

        $manualTest = $num % $x === 0;
        if ($manualTest) $knownFactors[$x] = 1;
        return $manualTest;
    }

    //"Optimizations" commented out, as they benchmarked slower than "brute force"

    // /**
    //  * Determines if 2 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is2AFactor(int $num) : bool
    // {
    //     $test = (int) Strings::lastXChars($num, 1);
    //     return $num !== 0 ? $test % 2 === 0 : false;
    // }

    // /**
    //  * Determines if 3 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is3Afactor(int $num) : bool
    // {
    //     $sumOfDigits = Numbers::sumOfDigits($num);
    //     return $sumOfDigits > 0 ? $sumOfDigits % 3 === 0 : false;
    // }

    // /**
    //  * Determines if 4 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is4Afactor(int $num) : bool
    // {
    //     if ($num > 99) {
    //         //last two chars
    //         $num = (int) Strings::lastXChars($num, 2);
    //         if ($num === 0) $num = 100;
    //     }
    //     return $num !== 0 ? $num % 4 === 0 : false;
    // }

    // /**
    //  * Determines if 5 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is5Afactor(int $num) : bool
    // {
    //     if ($num > 0)
    //     {
    //         $num = (int) Strings::lastXChars($num, 1);
    //         if ($num === 0 || $num === 5) return true;
    //     }
    //     return false;
    // }

    // /**
    //  * Determines if 6 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is6Afactor(int $num) : bool
    // {
    //     if ($num > 0)
    //     {
    //         if (self::is2AFactor($num) && self::is3Afactor($num))
    //            return true;
    //     }
    //     return false;
    // }

    // /**
    //  * Determines if 7 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is7AFactor(int $num) : bool
    // {
    //     if ($num > 0)
    //     {
    //         $length = strlen((string)$num) - 1;
    //         $num = Strings::firstXChars($num, $length) - (2 * Strings::lastXChars($num, 1));
    //         return $num % 7 === 0;
    //     }
    //     return false;
    // }

    // /**
    //  * Determines if 8 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is8AFactor(int $num) : bool
    // {
    //     if ($num > 0)
    //     {
    //         if ($num > 1000) {
    //             $num = (int) Strings::lastXChars($num, 3);
    //         }
    //         return ($num % 8) === 0;
    //     }
    //     return false;
    // }

    // /**
    //  * Determines if 9 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is9AFactor(int $num) : bool
    // {
    //     $sumOfDigits = Numbers::sumOfDigits($num);
    //     return $sumOfDigits > 0 ? $sumOfDigits % 9 === 0 : false;
    // }

    // /**
    //  * Determines if 10 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is10AFactor(int $num) : bool
    // {
    //     if ($num > 0)
    //     {
    //         $num = (int) Strings::lastXChars($num, 1);
    //         return $num === 0;
    //     }
    //     return false;
    // }

    // /**
    //  * Determines if 11 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is11AFactor(int $num) : bool
    // {
    //     if ($num > 0)
    //     {
    //         $num = (int) Numbers::alternatingSumOfDigits($num);
    //         return $num % 11 === 0;
    //     }
    //     return false;
    // }

    // /**
    //  * Determines if 12 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is12AFactor(int $num) : bool
    // {
    //     if ($num > 0)
    //     {
    //         if (self::is3AFactor($num) && self::is4Afactor($num))
    //            return true;
    //     }
    //     return false;
    // }

    // /**
    //  * Determines if 13 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is13AFactor(int $num) : bool
    // {
    //     if ($num > 0)
    //     {
    //         while ($num > 99) {
    //             $length = strlen((string)$num) - 1;
    //             $num = Strings::firstXChars($num, $length) + (4* Strings::lastXChars($num, 1));
    //         }
    //         return $num % 13 === 0;
    //     }
    //     return false;
    // }

    // /**
    //  * Determines if 16 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is16AFactor(int $num) : bool
    // {
    //     if ($num > 0)
    //     {
    //         while ($num > 99) {
    //             $length = strlen((string)$num) - 2;
    //             $num = (4 * Strings::firstXChars($num, $length)) + Strings::lastXChars($num, 2);
    //         }
    //         return $num % 16 === 0;
    //     }
    //     return false;
    // }

    // /**
    //  * Determines if 17 is a factor of $num
    //  *
    //  * @param integer $num
    //  * @return boolean
    //  */
    // public static function is17AFactor(int $num) : bool
    // {
    //     if ($num > 0)
    //     {
    //         while ($num > 99999) {
    //             $length = strlen((string)$num) - 1;
    //             $num = (Strings::firstXChars($num, $length)) - (5*Strings::lastXChars($num, 1));
    //         }
    //         return $num % 17 === 0;
    //     }
    //     return false;
    // }
}
