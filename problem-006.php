<?php
$sum = 0;
$total = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
    $total += $i * $i;
}

echo ($sum * $sum) - $total;
echo "\n";
