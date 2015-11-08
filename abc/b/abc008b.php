<?php
$count = trim(fgets(STDIN));
$tako = array();

for ($i=0; $i < $count; $i++) {
    $tako[] = trim(fgets(STDIN));
}
// var_dump($tako);
$res = array_count_values($tako);
arsort($res);

foreach ($res as $key => $value) {
    echo sprintf("%s\n", $key);
    exit;
}