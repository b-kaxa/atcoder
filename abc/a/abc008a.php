<?php

$res = explode(" ", trim(fgets(STDIN)));
printf("%d\n", $res[1] - $res[0] + 1);