<?php

$str = str_split(trim(fgets(STDIN)));

$num = 1;
$res = '';
for ($i=0; $i < count($str); $i++) {
    if ($str[$i] == $str[$i + 1]) {
        $num++;
    } else {
        $res = $res . (String)$str[$i] . $num;
        $num = 1;
    }
}

echo $res . PHP_EOL;