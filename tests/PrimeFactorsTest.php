<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase {
    
    /** @test */
    function primeFactorsOfOne(){
        $factors = new PrimeFactors;
        $this -> assertEquals([], $factors -> generate(1));
    }

    /** @test */
    function primeFactorsOfSix(){
        $factors = new PrimeFactors;
        $this -> assertEquals([2,3], $factors -> generate(6));
    }

    /** @test */
    function primeFactorsOfThirtySix(){
        $factors = new PrimeFactors;
        $this -> assertEquals([2,2,3,3], $factors -> generate(36));
    }

    /** @test */
    function isSixPrime(){
        $factors = new PrimeFactors;
        $this -> assertEquals(true, $factors -> isPrime(2));
    }
}