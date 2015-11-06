<?php
$count = trim(fgets(STDIN));
$array = array();
$div = $count;
$tmp = explode(" ", trim(fgets(STDIN)));

for ($i=0; $i < $count; $i++) {
    if ($tmp[$i] == 0) {
        $div--;
    }
    $array[] = $tmp[$i];
}
$total = array_sum($array);

echo sprintf("%s\n", ceil($total / $div));