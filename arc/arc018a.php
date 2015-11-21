<?php

list($height, $bmi) = explode(' ', trim(fgets(STDIN)));
$height = $height / 100;

echo sprintf("%f\n", $height * $height * $bmi);