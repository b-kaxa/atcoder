<?php
$str = str_split(trim(fgets(STDIN)));
$count = trim(fgets(STDIN));

for ($i=0; $i < $count ; $i++) {
    list($start, $end) = explode(' ', trim(fgets(STDIN)));
    $offset = $end - $start + 1;

    $piece = array_reverse(array_slice($str, $start - 1, $offset, true), true);

    foreach ($piece as $value) {
        $str[$start - 1] = $value;
        $start++;
    }
}

foreach ($str as $key => $value) {
    echo $value;
}

echo PHP_EOL;