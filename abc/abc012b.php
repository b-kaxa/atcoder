<?php

$std = trim(fgets(STDIN));

$h = floor($std / 3600);
$m = floor(($std - $h * 3600) / 60);
$s = $std - $h * 3600 - $m * 60;

echo sprintf("%02d:%02d:%02d\n", $h, $m, $s);