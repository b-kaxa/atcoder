<?php

$std = trim(fgets(STDIN));
list($a, $b) = explode(" ", $std);

$taka = $b / $a;
$aoki = $d / $c;

if ($taka > $aoki) {
    printf("%s\n", 'TAKAHASHI');
} else if ($aoki > $taka) {
    printf("%s\n", 'AOKI');
} else {
    printf("%s\n", 'DRAW');
}