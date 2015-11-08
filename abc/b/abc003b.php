<?php

$f_line = str_split(trim(fgets(STDIN)));
$s_line = str_split(trim(fgets(STDIN)));
$array = array('a','t','c','o','d','e','r');

for ($i=0; $i < count($f_line); $i++) {
    if ($f_line[$i] == $s_line[$i]){
        continue;
    } else {
        if ($f_line[$i] !== '@' && $s_line[$i] !== '@') {
            printf("You will lose\n");
            exit;
        }

        $char = $f_line[$i] == '@' ? $s_line[$i] : $f_line[$i];
        if (array_search($char, $array) === false) {
            printf("You will lose\n");
            exit;
        }
    }
}

printf("You can win\n");