<?php
// If the numbers 1 to 5 are written out in words: one, two, three, four, five, then there are 3 + 3 + 5 + 4 + 4 = 19 letters used in total.

// If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?

// NOTE: Do not count spaces or hyphens. For example, 342 (three hundred and forty-two) contains 23 letters and 115 (one hundred and fifteen) contains 20 letters. The use of "and" when writing out numbers is in compliance with British usage.

$numLetters = 0;

for ($i = 1; $i < 1000; $i++) {
    if ($i >= 100) {
        $numLetters += strlen('hundred');

        if ($i % 100 != 0) {
            $numLetters += strlen('and');
        }

        $numLetters += strlen(convertToNumber(floor(($i / 100))));
    }

    if ($i % 100 < 20) {
        $numLetters += strlen(convertToNumber($i % 100));
    }
    else {
        $numLetters += strlen(convertToNumber($i % 10));
        $numLetters += strlen(convertToNumber(floor(($i % 100) / 10) * 10));
    }
}

// add in one thousand
$numLetters += strlen('onethousand');

echo "$numLetters\n";

function convertToNumber($num)
{
    if ($num == 1) {
        return 'one';
    }

    if ($num == 2) {
        return 'two';
    }

    if ($num == 3) {
        return 'three';
    }

    if ($num == 4) {
        return 'four';
    }

    if ($num == 5) {
        return 'five';
    }

    if ($num == 6) {
        return 'six';
    }

    if ($num == 7) {
        return 'seven';
    }

    if ($num == 8) {
        return 'eight';
    }

    if ($num == 9) {
        return 'nine';
    }

    if ($num == 10) {
        return 'ten';
    }

    if ($num == 11) {
        return 'eleven';
    }

    if ($num == 12) {
        return 'twelve';
    }

    if ($num == 13) {
        return 'thirteen';
    }

    if ($num == 14) {
        return 'fourteen';
    }

    if ($num == 15) {
        return 'fifteen';
    }

    if ($num == 16) {
        return 'sixteen';
    }

    if ($num == 17) {
        return 'seventeen';
    }

    if ($num == 18) {
        return 'eighteen';
    }

    if ($num == 19) {
        return 'nineteen';
    }

    if ($num == 20) {
        return 'twenty';
    }

    if ($num == 30) {
        return 'thirty';
    }

    if ($num == 40) {
        return 'forty';
    }

    if ($num == 50) {
        return 'fifty';
    }

    if ($num == 60) {
        return 'sixty';
    }

    if ($num == 70) {
        return 'seventy';
    }

    if ($num == 80) {
        return 'eighty';
    }

    if ($num == 90) {
        return 'ninety';
    }

    if ($num == 0) {
        return '';
    }

    throw new Exception('I dont know what to do with ' . $num);
}
