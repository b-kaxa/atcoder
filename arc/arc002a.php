<?php

$year = trim(fgets(STDIN));

if ($year % 400 == 0) {
    echo sprintf("%s\n", 'YES');
    exit;
}

if ($year % 100 == 0) {
    echo sprintf("%s\n", 'NO');
    exit;
}

if ($year % 4 == 0) {
    echo sprintf("%s\n", 'YES');
    exit;
}

echo sprintf("%s\n", 'NO');