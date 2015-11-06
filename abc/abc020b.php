<?php
$array = explode(" ", trim(fgets(STDIN)));
$str = (String)$array[0] . (String)$array[1];

echo sprintf("%d\n", $str * 2);