<?php

$res = explode(" ", trim(fgets(STDIN)));
printf("%d\n", floor($res[1] / $res[0]));