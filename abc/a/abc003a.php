<?php

$std = trim(fgets(STDIN));
$sum = 0;

for ($i=1; $i <= $std ; $i++) {
    $sum += $i * 10000 * (1 / $std);
}

printf("%d\n", $sum);