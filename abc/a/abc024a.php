<?php

$std = trim(fgets(STDIN));
// 0 = 子ども一人当たり, 1 = 大人一人, 2 = 値引き金額, 3 = 何人以上
list($l[0], $l[1], $l[2], $l[3]) = explode(" ", $std);

$std = trim(fgets(STDIN));
// 0 = 子ども人数, 1 = 大人人数
list($num[0], $num[1]) = explode(" ", $std);

$total_number = $num[0] + $num[1];

$minus_num = 0;
if($total_number >= $l[3]){
  $minus_num = $total_number * $l[2];
}
$sum = $l[0] * $num[0] + $l[1] * $num[1] - $minus_num;

printf("%d\n", $sum);