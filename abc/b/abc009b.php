<?php
$count = trim(fgets(STDIN));
$array = array();

for ($i=0; $i < $count; $i++) {
    $array[] = trim(fgets(STDIN));
}
$unique = array_unique($array);
arsort($unique);
$res = array_values($unique);

echo sprintf("%s\n", $res[1]);