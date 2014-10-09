<?php
// 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
// What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

// the easiest way to solve this is just multiply the prime factors from 1 to 20 but let's do this
// the old fashioned way

$match = false;
$counter = 1;

while (!$match) {
    for ($i = 20; $i > 0; $i--) {
        if ($counter % $i != 0) {
            break;
        }
    }
    if ($i == 0) {
        $match = true;
    }
    else {
        $counter++;
    }
}

echo "$counter\n";
