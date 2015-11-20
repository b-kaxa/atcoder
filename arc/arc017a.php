<?php

$num = trim(fgets(STDIN));

$ans = true;
for ($i=2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $ans = false;
        break;
    }
}

echo sprintf("%s\n", $ans ? 'YES' : 'NO');