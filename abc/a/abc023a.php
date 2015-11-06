<?php
$num = trim(fgets(STDIN));
$right = $num % 10;
$left = ($num - $right) / 10;

echo sprintf("%d\n", $right + $left);