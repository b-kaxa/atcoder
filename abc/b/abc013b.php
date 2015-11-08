<?php
$now = trim(fgets(STDIN));
$target = trim(fgets(STDIN));

$res1 = abs($now - $target);
$res2 = abs($now - ($target + 10));
$res3 = abs($now + 10 - $target);

printf("%d\n", min($res1, $res2, $res3));
