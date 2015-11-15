<?php

$tmp = trim(fgets(STDIN));
$array = explode(' ' ,str_replace('.', '', trim(fgets(STDIN))));

$count = 0;
foreach ($array as $value) {
    if ($value == 'TAKAHASHIKUN' | $value == 'Takahashikun' | $value == 'takahashikun') {
        $count++;
    }
}

echo sprintf("%d\n", $count);