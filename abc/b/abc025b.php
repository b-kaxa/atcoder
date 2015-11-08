<?php
list($count, $limit_min, $limit_max) = explode(' ', trim(fgets(STDIN)));
$now = 0;

for ($i=0; $i < $count; $i++) {
    list($dir, $meter) = explode(' ', trim(fgets(STDIN)));
    if ($dir == "West") {
        $now -= min($limit_max, max($limit_min, $meter));
    } else {
        $now += max($limit_min, min($limit_max, $meter));
    }
}

if ($now < 0) {
    echo "West " . abs($now) . PHP_EOL;
} else if (0 < $now) {
    echo "East " . $now . PHP_EOL;
} else {
    echo "0" . PHP_EOL;
}