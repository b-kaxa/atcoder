<?php
$num = trim(fgets(STDIN));
list($start, $end) = explode(" ", trim(fgets(STDIN)));
$route_count = trim(fgets(STDIN));
$route = explode(" ", trim(fgets(STDIN)));

if (count($route) !== count(array_unique($route))) {
    echo 'NO' . PHP_EOL;
    exit;
}

if (in_array($start, $route)) {
    echo 'NO' . PHP_EOL;
    exit;
}

if (in_array($end, $route)) {
    echo 'NO' . PHP_EOL;
    exit;
}

echo 'YES' . PHP_EOL;
