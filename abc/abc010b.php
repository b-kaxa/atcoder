<?php
$count = trim(fgets(STDIN));
$array = explode(" ", trim(fgets(STDIN)));
$res = 0;

for ($i=0; $i < $count; $i++) {
    $tmp = $array[$i];
    switch ($tmp) {
        case '2':
        case '4':
        case '8':
            $res += 1;
            break;
        case '5':
            $res += 2;
            break;
        case '6':
            $res += 3;
            break;
        default:
            $res += 0;
            break;
    }
}

echo sprintf("%d\n", $res);