<?php
list($a, $b, $c) = explode(" ", trim(fgets(STDIN)));
$sum = $a + $b;
$diff = abs($a - $b);

if ($c == $sum && $c == $diff) {
    echo '?' . PHP_EOL;
} else if ($c == $diff) {
    echo '-' . PHP_EOL;
} else if ($c == $sum) {
    echo '+' . PHP_EOL;
} else {
    echo '!' . PHP_EOL;
}