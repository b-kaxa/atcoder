<?php
$snack = trim(fgets(STDIN));
$count = trim(fgets(STDIN));

for ($i=$snack; $i <= 1000; $i++) {
    if ($i % $count == 0){
        printf("%d\n", $i - $snack);
        exit;
    }
}