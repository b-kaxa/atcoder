<?php

$std = trim(fgets(STDIN));
list($a, $b) = explode(" ", $std);

printf("%d\n", $a > $b ? $a : $b);