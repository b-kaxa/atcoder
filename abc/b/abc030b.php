<?php

$std = trim(fgets(STDIN));
list($a, $b) = explode(" ", $std);

$time = $a <= 12 ? $a : $a - 12;
$minute = $b;

$ra = $time * (360 / 12);
$ra = $ra + $minute * 1/2;

$rb = $minute * (360 / 60);

$ans = abs($rb - $ra) > (360 - abs($ra - $rb)) ? (360 - abs($ra - $rb)) : abs($rb - $ra);
echo $ans . "\n";