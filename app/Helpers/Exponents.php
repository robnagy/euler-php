<?php

namespace App\Helpers;

class Exponents
{
    public static function modularExponentiation1(int $base, int $exponent, int $modulus): int
    {
        if ($modulus === 1) {
            return 0;
        }

        $c = 1;
        for ($e_prime = 0; $e_prime < $exponent; $e_prime++) {
            $c = ($c * $base) % $modulus;
        }
        return $c;
    }

    public static function sumOfPowerOfDigits(int $number, int $power): int
    {
        $number = str_split((string) $number);
        $sum = 0;
        foreach ($number as $digit) {
            $sum += pow($digit, $power);
        }
        return $sum;
    }
}
