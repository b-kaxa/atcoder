<?php

$n = trim(fgets(STDIN));

if (6 < $n % 10) {
    $a = 100 * ceil($n / 10);
    $b = 100000;
} else {
    $a = $n * 15;
    $b = (100 * floor($n / 10)) + (15 * ($n % 10));
}

echo sprintf("%d\n", min($a, $b));