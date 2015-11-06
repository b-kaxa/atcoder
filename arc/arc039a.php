<?php

$std = trim(fgets(STDIN));
list($l[0], $l[1]) = explode(' ', $std);

if ($l[0] < 0) {
    var_dump($l);
}

$add = floor($l[0] / 100);
$res1 = $l[0] + 900 - $l[1] - $add * 100;

$add2 = floor($l[1] / 100);
$res2 = $l[0] - ($l[1] - $add2 * 100 + 100);

if ($res1 < $res2) {
    printf($res2."\n");
} else {
    printf($res1."\n");
}
