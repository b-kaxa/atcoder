<?php

$n = trim(fgets(STDIN));
$sum = 0;

for ($i=0; $i < $n; $i++) {
    list($count, $v) = explode(' ', trim(fgets(STDIN)));
    $sum += $count * $v;
}

echo sprintf("%d\n", floor($sum * 1.05));