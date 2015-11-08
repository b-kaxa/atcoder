<?php
$count = trim(fgets(STDIN));
$array = array();

for ($i=0; $i < $count; $i++) {
    $array[] = trim(fgets(STDIN));
}

$unique = array_unique($array);

echo sprintf("%d\n", $count - count($unique));