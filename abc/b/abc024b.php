<?php

$std = trim(fgets(STDIN));
// 0 = 子ども人数, 1 = 大人人数
list($total_num, $door_sec) = explode(" ", $std);

$p_array = array();
for ($i=0; $i < $total_num; $i++) {
  $p_array[] = trim(fgets(STDIN));
}

$total_sec = 0;
$count = 0;

for ($i=0; $i < $total_num - 1 ; $i++) {
  if(($p_array[$i+1] - $p_array[$i]) <= $door_sec){
    $total_sec += $p_array[$i + 1] - $p_array[$i];
  } else {
    $total_sec += $door_sec;
  }
}
$total_sec += $door_sec;

printf("%d\n", $total_sec);