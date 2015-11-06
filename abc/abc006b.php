<?php
$count = trim(fgets(STDIN));
$array[0] = 0;
$array[1] = 0;
$array[2] = 1;

for ($i=3; $i < $count; $i++) {
    $array[$i] = $array[$i - 1] + $array[$i - 2] + $array[$i - 3];
    $array[$i] = $array[$i] % 10007;
}

echo bcmod($array[$count - 1],10007) . PHP_EOL;