<?php

$count = trim(fgets(STDIN));

for ($i=1; $i <= $count; $i++) {
    $str = trim(fgets(STDIN));
    list($x[$i], $y[$i]) = explode(' ', $str);
}

$array = array();
for ($j=1; $j <= $count; $j++) {
    for ($k=1; $k <= $count; $k++) {
        $array[] = sqrt(pow(($x[$j] - $x[$k]), 2) + pow(($y[$j] - $y[$k]), 2));
    }
}

echo sprintf("%.6f\n", max($array));