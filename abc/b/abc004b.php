<?php

$a_line = explode(" ", trim(fgets(STDIN)));
$b_line = explode(" ", trim(fgets(STDIN)));
$c_line = explode(" ", trim(fgets(STDIN)));
$d_line = explode(" ", trim(fgets(STDIN)));

$res = array_merge_recursive($a_line, $b_line, $c_line, $d_line);

for ($i=count($res) - 1; -1 < $i; $i--) {
    printf("%s", $res[$i]);
    printf(" ");

    if ($i % 4 == 0){
        printf("\n");
    }
}