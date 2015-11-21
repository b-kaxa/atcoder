<?php

list($ant, $bug) = explode(' ', trim(fgets(STDIN)));

$res = '';
if (abs($ant) < abs($bug)) {
    $res = 'Ant';
} else if (abs($bug) < abs($ant)) {
    $res = 'Bug';
} else {
    $res = 'Draw';
}

echo sprintf("%s\n", $res);