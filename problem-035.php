<?php
// The number, 197, is called a circular prime because all rotations of the digits: 197, 971, and 719, are themselves prime.

// There are thirteen such primes below 100: 2, 3, 5, 7, 11, 13, 17, 31, 37, 71, 73, 79, and 97.

// How many circular primes are there below one million?
require_once('models/Prime.php');

$prime = new Prime();
$prime->isPrime(2);

for ($i = 3; $i <= 1000000; $i+=2) {
    $prime->isPrime($i);
}

$primes = $prime->primes();
$counter = 0;
$tmp = '';
$circular = '';

foreach ($primes as $p) {
    if (strlen($p) == 1) {
        $counter++;
    }
    else {
        $check = true;
        $circular = $p;

        for ($i = 0; $i < strlen($p); $i++) {
            $tmp = str_split($circular);
            $tmp[] = array_shift($tmp);
            $circular = implode('', $tmp);

            if (!in_array($circular, $primes)) {
                $check = false;
                break;
            }
        }

        if ($check) {
            $counter++;
        }
    }
}

echo "$counter\n";
