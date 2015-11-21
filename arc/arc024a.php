<?php

$count = array_sum(explode(' ', trim(fgets(STDIN))));

$l = explode(' ', trim(fgets(STDIN)));
$r = explode(' ', trim(fgets(STDIN)));

$pair_rest = count(array_unique(array_merge($l,$r)));
$decrement = ($count - $pair_rest) / 2;

echo sprintf("%d\n", ceil($decrement));