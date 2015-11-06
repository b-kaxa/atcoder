<?php

$p_num = trim(fgets(STDIN));

$joshi_num = array();
$buka_num = array();
for ($i=2; $i < $p_num + 1; $i++) {
  $joshi_num[$i] = trim(fgets(STDIN));
  $buka_num[$joshi_num[$i]][] = $i;
}

$salary_array = array();
$buka_salary = array();

for ($i=$p_num; $i > 0; $i--) {
  // echo "社員番号" . $i . "\n";

  if($buka_num[$i]){
    foreach ($buka_num[$i] as $value) {
      // echo "社員番号".$value."の給料は".$salary_array[$value]."\n";
      $buka_salary[$i][] = $salary_array[$value];
    }
    $salary_array[$i] = max($buka_salary[$i]) + min($buka_salary[$i]) + 1;
  } else {
    $salary_array[$i] = 1;
  }
}

printf("%d\n", $salary_array[1]);