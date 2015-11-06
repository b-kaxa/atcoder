<?php
$array = explode(' ', trim(fgets(STDIN)));
sort($array);

printf("%d\n", $array[0] + $array[3] + $array[4]);