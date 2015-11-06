<?php

$std = trim(fgets(STDIN));
list($a, $b, $c, $d) = explode(" ", $std);

$taka = $b / $a;
$aoki = $d / $c;

printf("%f\n", $taka);