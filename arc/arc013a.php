<?php

$str = trim(fgets(STDIN));
list($x[0], $x[1], $x[2]) = explode(' ', $str);

$str = trim(fgets(STDIN));
list($y[0], $y[1], $y[2]) = explode(' ', $str);

$res = array();

$res[] = floor($x[0] / $y[0]) * floor($x[1] / $y[1]) * floor($x[2] / $y[2]);
$res[] = floor($x[0] / $y[0]) * floor($x[1] / $y[2]) * floor($x[2] / $y[1]);
$res[] = floor($x[0] / $y[1]) * floor($x[1] / $y[0]) * floor($x[2] / $y[2]);
$res[] = floor($x[0] / $y[1]) * floor($x[1] / $y[2]) * floor($x[2] / $y[0]);
$res[] = floor($x[0] / $y[2]) * floor($x[1] / $y[0]) * floor($x[2] / $y[1]);
$res[] = floor($x[0] / $y[2]) * floor($x[1] / $y[1]) * floor($x[2] / $y[0]);

echo sprintf("%d\n", max($res));