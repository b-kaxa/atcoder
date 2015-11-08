<?php

$std = trim(fgets(STDIN));
$array_s = array("a", "e", "i", "o", "u");

printf("%s\n", str_replace($array_s, "", $std));