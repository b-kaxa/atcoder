<?php
$tmp = trim(fgets(STDIN));
$res = 0;

switch ($tmp) {
    case 'A':
        $res = 1;
        break;
    case 'B':
        $res = 2;
        break;
    case 'C':
        $res = 3;
        break;
    case 'D':
        $res = 4;
        break;
    case 'E':
        $res = 5;
        break;
    default:
        $res = 0;
        break;
}

echo sprintf("%s\n", $res);
