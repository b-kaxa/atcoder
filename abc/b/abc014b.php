<?php
list($count, $number) = explode(" ", trim(fgets(STDIN)));
$ten_to_two = array_reverse(str_split(decbin($number)));
$array = explode(" ", trim(fgets(STDIN)));

$res = 0;
for ($i=0; $i < $count; $i++) {
    if ($ten_to_two[$i] == '1') {
        $res += $array[$i];
    }
}

echo $res . PHP_EOL;