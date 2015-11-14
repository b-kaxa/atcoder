<?php

$count = trim(fgets(STDIN));
$std = trim(fgets(STDIN));
$array = str_split($std);

$a = $b = $c = $d = 0;
for ($i=0; $i < $count; $i++) {
    switch ($array[$i]) {
        case '1':
            $a++;
            break;
        case '2':
            $b++;
            break;
        case '3':
            $c++;
            break;
        case '4':
            $d++;
            break;
    }
}

echo sprintf("%d %d\n", max($a,$b,$c,$d), min($a,$b,$c,$d));