<?php

$masu_num = trim(fgets(STDIN));
list($total, $range) = explode(' ', $masu_num);

$tmp = trim(fgets(STDIN));
$yuka = str_split($tmp);

$check = $yuka;

for ($i = 0; $i < $total; ++$i) {
    var_dump($yuka);

    if ($yuka[$i] == '.') {
        for ($k = $i; $k < $range + $i; ++$k) {
            $yuka[$k] = 'o';
        }
    } elseif ($yuka[$i] == 'o') {
        for ($j = 0; $j < $total; ++$j) {
            if ($check[$j] == '.') {
            } elseif ($check[$j] == 'o') {
                ++$count;
            }

            if ($count == $total - 1) {
                printf("%s\n", $i + 1);
                exit();
            }
        }
    }
    $check = $yuka;
}
