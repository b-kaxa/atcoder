<?php

$std = trim(fgets(STDIN));
list($a, $b) = explode(" ", $std);

printf("%d %d\n", $b, $a);