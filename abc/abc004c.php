<?php

$count = trim(fgets(STDIN)) % 30;
$array = array('1','2','3','4','5','6');

for ($i=0; $i < $count; $i++) {
    $a = ($i % 5) + 1 - 1;
    $b = ($i % 5) + 2 - 1;

    list($array[$a], $array[$b]) = array($array[$b], $array[$a]) + array();
}

for ($j=0; $j < count($array); $j++) {
    printf("%d", $array[$j]);
}
printf("\n");