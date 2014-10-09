<?php
// The prime factors of 13195 are 5, 7, 13 and 29.
// What is the largest prime factor of the number 600851475143 ?

class Prime
{
    protected $primes;

    public function __construct()
    {
        // start with some sane defaults
        $this->primes = array();
    }

    public function factor($num)
    {
        // we can cheat here because a number wouldn't have a prime factor
        // greater than itself / 2
        // there are probably other cheats we could do
        for ($i = 2; $i < $num / 2; $i++) {
            if ($num % $i == 0) {
                $this->isPrime($i);
            }
        }

        return $this->primes;
    }

    public function isPrime($num)
    {
        // assume sane defaults
        if ($num < 2) {
            return false;
        }

        // primes can only end in four digits if larger than 10
        if ($num > 10) {
            $toCheck = array(1, 3, 7, 9);
            $lastDigit = $num % 10;

            if (!in_array($lastDigit, $toCheck)) {
                return false;
            }
        }

        // go through all the primes we have
        foreach ($this->primes as $prime) {
            if ($num % $prime == 0) {
                return false;
            }
        }

        // this is prime, add to our list
        $this->primes[] = $num;
        return true;
    }

    public function primes()
    {
        return $this->primes;
    }
}
