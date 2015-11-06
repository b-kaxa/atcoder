<?php

$a = trim(fgets(STDIN) / 1000);

if ($a < 0.1) {
    echo "00\n";
} elseif ($a <= 5 && 0.1 <= $a) {
    echo sprintf("%02d\n", $a * 10);
} elseif ($a <= 30 && 6 <= $a) {
    echo sprintf("%02d\n", $a + 50);
} elseif ($a <= 70 && 35 <= $a) {
    echo sprintf("%02d\n", ($a - 30) / 5 + 80 );
} else {
    echo "89\n";
}