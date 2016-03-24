<?php

$str = trim(fgets(STDIN));
$array = explode('+',$str);
$count = 0;

foreach ($array as $k => $v) {

    $res = preg_match('/0/', $v);

    if (1 == $res) {
        continue;
    } else {
        $count++;
    }
}
echo $count . PHP_EOL;
