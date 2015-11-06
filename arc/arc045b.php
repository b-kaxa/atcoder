<?php

$info = explode(' ', trim(fgets(STDIN)));
$count_array = [];

for ($i = 0; $i < $info[1]; ++$i) {
    $range[$i] = explode(' ', trim(fgets(STDIN)));

    for ($j = $range[$i][0]; $j <= $range[$i][1]; ++$j) {
        ++$count_array[$j];
    }
}

for ($k = 0; $k < $info[1]; ++$k) {
    for ($n = $range[$k][0]; $n <= $range[$k][1]; ++$n) {
        if ($count_array[$n] == 1) {
            unset($count_array[$n]);
        }
    }

    for ($s = $range[$k][0]; $s <= $range[$k][1]; ++$s) {
        if (array_key_exists($s, $count_array)) {
            ++$tmp;
        }
    }

    if ($tmp == $range[$k][1] - $range[$k][0] + 1) {
        $result_array[] = $k + 1;
    }
}
var_dump($count_array);
if (count($result_array) != 0) {
    echo count($result_array)."\n";
    foreach ($result_array as $value) {
        echo $value."\n";
    }
} else {
    echo "0\n";
    exit;
}
