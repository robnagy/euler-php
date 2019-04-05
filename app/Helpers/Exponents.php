<?php

namespace App\Helpers;

class Exponents
{
    public static function modularExponentiation1(int $base, int $exponent, int $modulus) : int
    {
        if ($modulus === 1) return 0;
        $c = 1;
        for ($e_prime = 0; $e_prime < $exponent; $e_prime++)
        {
            $c = ($c * $base) % $modulus;
        }
        return $c;
    }
}
