<?php
// The prime factors of 13195 are 5, 7, 13 and 29.
// What is the largest prime factor of the number 600851475143 ?

require_once('models/Prime.php');

$prime = new Prime();
$primeFactors = $prime->factor(600851475143);
echo max($primeFactors)."\n";
