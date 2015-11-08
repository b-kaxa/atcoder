<?php
$i_num = trim(fgets(STDIN));
$people = explode(' ', trim(fgets(STDIN)));
$sum = array_sum($people);
$cur_p = $sum / $i_num;

if (count(array_unique($people)) == 1) {
    printf("%d\n", 0);
    exit;
}

if ($sum % $i_num !== 0) {
    printf("%d\n", -1);
    exit;
}

foreach ($people as $key => $value) {
    $diff[] = $value - $cur_p;
}

$count = 0;
foreach ($diff as $key => $value) {
    $loop_num++;
    $res += $value;
    if ($res == 0 && $loop_num == $i_num) {
        echo $count . PHP_EOL;
        exit;
    }
    if ($res !== 0) {
        $count++;
    }
}