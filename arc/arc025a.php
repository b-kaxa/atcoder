<?php

$jungle = explode(' ', trim(fgets(STDIN)));
$desert = explode(' ', trim(fgets(STDIN)));

$sum = 0;
for ($i=0; $i < 7; $i++) {
    if ($jungle[$i] < $desert[$i]) {
        $sum += $desert[$i];
    } else {
        $sum += $jungle[$i];
    }
}

echo sprintf("%d\n", $sum);