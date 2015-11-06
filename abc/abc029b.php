<?php

$count = 0;
for ($i=1; $i <= 12; $i++) {
  $string = trim(fgets(STDIN));

  if (strpos($string, 'r') !== false){
    $count++;
  }
}

printf("%d\n", $count);