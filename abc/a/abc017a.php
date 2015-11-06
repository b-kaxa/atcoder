<?php
$array = array();
$sum = 0;

for ($i=0; $i < 3; $i++) {
    list($score, $per) = explode(' ', trim(fgets(STDIN)));
    $sum += $score * 0.1 * $per;
}

echo sprintf("%s\n", $sum);