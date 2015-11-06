<?php
$tmp = explode(" ", trim(fgets(STDIN)));

if ($tmp[0] % $tmp[1] == 0 ) {
    echo sprintf("YES\n");
} else {
    echo sprintf("NO\n");
}