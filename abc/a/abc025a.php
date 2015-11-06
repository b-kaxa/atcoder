<?php
$string = str_split(trim(fgets(STDIN)));
$number = trim(fgets(STDIN));
$rest = $number % 5;

if ($number == 25) {
    echo sprintf("%s%s\n", $string[4], $string[4]);
    exit;
}

if ($rest == 0) {
    echo sprintf("%s%s\n", $string[($number - $rest) / 5 - 1], $string[4]);
    exit;
}

echo sprintf("%s%s\n", $string[($number - $rest) / 5], $string[$rest - 1]);