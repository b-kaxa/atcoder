<?php

$total_num = trim(fgets(STDIN));

$p_array = array();
$line = array();

$t = 0;
$a = 0;

for ($i = 0; $i < $total_num; ++$i) {
    $p_array[$i] = trim(fgets(STDIN));
    $line[] = str_split($p_array[$i]);

    for ($k = 0; $k < $total_num; ++$k) {
        if ($line[$i][$k] == 'R') {
            ++$t;
        } elseif ($line[$i][$k] == 'B') {
            ++$a;
        } else {
        }
    }
}

if ($t > $a) {
    printf("TAKAHASHI\n");
} elseif ($t < $a) {
    printf("AOKI\n");
} else {
    printf("DRAW\n");
}
