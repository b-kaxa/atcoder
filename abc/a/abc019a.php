<?php
$array = array();
$array = explode(' ', trim(fgets(STDIN)));

arsort($array);
$res = array_values($array);

echo sprintf("%d\n", $res[1]);