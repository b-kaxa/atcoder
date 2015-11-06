<?php

$count = trim(fgets(STDIN));

$p_array = array();
for ($i=0; $i < $count; $i++) {
  $p_array[] = trim(fgets(STDIN));
}

sort($p_array);
$res_array = array();

for ($i=0; $i < $count; $i++) {
  if($i % 2 == 0){
    $res_array[] = $p_array[$i] * $p_array[$i];
  } else {
    $res_array[] = $p_array[$i] * $p_array[$i] * -1;
  }
}
$last_res = abs(array_sum($res_array) * pi());

printf("%f\n", $last_res);