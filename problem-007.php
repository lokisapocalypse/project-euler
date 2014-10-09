<?php
// By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
// What is the 10 001st prime number?

require_once('models/Prime.php');

$prime = new Prime();
$counter = 1;

do {
    $counter++;
    $prime->isPrime($counter);
} while (count($prime->primes()) < 10001);

echo "$counter\n";
