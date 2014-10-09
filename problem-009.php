<?php
// A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
// a2 + b2 = c2
// For example, 32 + 42 = 9 + 16 = 25 = 52.
// There exists exactly one Pythagorean triplet for which a + b + c = 1000.
// Find the product abc

for ($c = 0; $c < 1000; $c++) {
    for ($b = 0; $b < $c; $b++) {
        for ($a = 0; $a < $b; $a++) {
            if (($a * $a) + ($b * $b) == ($c * $c)
                && $a + $b + $c == 1000
            ) {
                echo $a * $b * $c;
                echo "\n";
                break 3;
            }
        }
    }
}
