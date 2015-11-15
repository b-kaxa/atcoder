<?php

$a = explode(' ', trim(fgets(STDIN)));
$b = trim(fgets(STDIN));
$q = explode(' ', trim(fgets(STDIN)));

$count = 0;
$array = array();
for ($i=0; $i < 6; $i++) {
    for ($k=0; $k < 6; $k++) {
        if ($a[$i] - $q[$k] == 0) {
            $count++;
        } else {
            $array[] = $q[$i];
        }
    }
}

if ($count == 6) {
    echo '1';
    print("\n");
    exit;
} else if ($count == 5) {
    if (in_array($b, $array)) {
        echo '2';
        print("\n");
    } else {
        echo '3';
        print("\n");
    }
    exit;
} else if ($count == 4) {
    echo '4';
    print("\n");
    exit;
} else if ($count == 3) {
    echo '5';
    print("\n");
    exit;
} else {
    echo '0';
    print("\n");
    exit;
}