<?php
// The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
// Find the sum of all the primes below two million

require_once('models/Prime.php');

$primes = new Prime();

for ($i = 2; $i < 2000000; $i++) {
    $primes->isPrime($i);
}
echo array_sum($primes->primes())."\n";
