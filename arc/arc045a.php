<?php

$array = explode(' ', trim(fgets(STDIN)));

for ($i = 0; $i < count($array); ++$i) {
    if ($array[$i] == 'Left') {
        echo '<';
    }
    if ($array[$i] == 'Right') {
        echo '>';
    }
    if ($array[$i] == 'AtCoder') {
        echo 'A';
    }

    if ($i == count($array) - 1) {
        echo "\n";
        exit;
    }

    echo ' ';
}
