<?php

$str = trim(fgets(STDIN));
$needle = array('O','D','I','Z','S','B');
$replace = array('0','0','1','2','5','8');

$ans = str_replace($needle, $replace, $str);

echo sprintf("%s\n", $ans);