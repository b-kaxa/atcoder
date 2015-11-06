<?php
$num = trim(fgets(STDIN));
$str = str_split((trim(fgets(STDIN))));

if ($num % 2 == 0) {
    echo '-1' . PHP_EOL;
    exit;
}

if (!($str[0] == 'a' && $str[$num - 1] == 'c') && !($str[0] == 'c' && $str[$num - 1] == 'a') && !($str[0] == 'b' && $str[$num - 1] == 'b')) {
    echo '-1' . PHP_EOL;
    exit;
}

for ($i=0; $i < $num - 1; $i++) {
    if ($str[$i] == 'a' && $str[$i + 1] == 'b') {
        continue;
    } else if ($str[$i] == 'b' && $str[$i + 1] == 'c') {
        continue;
    } else if ($str[$i] == 'c' && $str[$i + 1] == 'a') {
        continue;
    } else {
        echo '-1' . PHP_EOL;
        exit;
    }
}

echo floor(count($str) / 2) . PHP_EOL;