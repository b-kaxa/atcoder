<?php
$keys = array('A','B','C','D','E','F');
$base = array_fill_keys($keys, 0);

$string = str_split(trim(fgets(STDIN)));
sort($string);
$update = array_count_values($string);

$res = array_replace($base, $update);

printf("%d %d %d %d %d %d\n", $res['A'],$res['B'],$res['C'],$res['D'],$res['E'],$res['F']);