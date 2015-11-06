<?php
$array = explode(' ', trim(fgets(STDIN)));

if ($array[0] == $array[1]) {
    echo sprintf("%d\n", $array[2]);
} else if ($array[1] == $array[2]) {
    echo sprintf("%d\n", $array[0]);
} else if ($array[0] == $array[2]) {
    echo sprintf("%d\n", $array[1]);
}