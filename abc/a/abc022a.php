<?php
list($days, $low, $high) = explode(' ', trim(fgets(STDIN)));
$body = 0;
$best = 0;

for ($i=0; $i < $days; $i++) {
    $body += trim(fgets(STDIN));
    if ($low <= $body && $body <= $high){
        $best++;
    }
}

echo sprintf("%d\n", $best);