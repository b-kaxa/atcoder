<?php

$str = trim(fgets(STDIN));
list($select, $ans) = explode(' ', $str);

for ($i=1; $i < 6; $i++) {
    if ((int)$i !== (int)$ans) {
        $res = $i;
        break;
    }
}

echo sprintf("%d\n", $res);