<?php
$count = trim(fgets(STDIN));
$tako = array();

for ($i=0; $i < $count; $i++) {
    $tako[] = trim(fgets(STDIN));
}

printf("%d\n", min($tako));