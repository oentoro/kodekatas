<?php

namespace App;

class PrimeFactors{

    public function generate($number){
        if($number == 1){
            return [];
        }
        if($this -> isPrime($number))
            return[$number];
        $factors = [];
        $divResult = $number;
        $divisor = 2;
        while($divResult > 1){
            if(!$this -> isPrime($divisor)){
                $divisor = $divisor + 1;
                continue;
            }
            if($divResult % $divisor == 0)
            {
                array_push($factors, $divisor);
                $divResult = $divResult / $divisor;
            } else {
                $divisor = $divisor + 1;
            }
        }
        return $factors;
    }

    public function isPrime($number){
        for($i = 1; $i <= $number; $i++){
            if($number % $i == 0 && $i != $number && $i > 1){
                return false;
            }
        }
        return true;
    }
    
}