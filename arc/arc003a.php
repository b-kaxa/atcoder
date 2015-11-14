<?php

$count = trim(fgets(STDIN));
$str = trim(fgets(STDIN));
$array = str_split($str);

$score = 0;
for ($i=0; $i < $count; $i++) {
    switch ($array[$i]) {
        case 'A':
            $score += 4;
            break;
        case 'B':
            $score += 3;
            break;
        case 'C':
            $score += 2;
            break;
        case 'D':
            $score += 1;
            break;
        case 'F':
            break;
    }
}

echo sprintf("%.15f\n", $score / $count);