<?php
$day = trim(fgets(STDIN));

switch ($day) {
    case 'Monday':
        $res = 5;
        break;
    case 'Tuesday':
        $res = 4;
        break;
    case 'Wednesday':
        $res = 3;
        break;
    case 'Thursday':
        $res = 2;
        break;
    case 'Friday':
        $res = 1;
        break;
    default:
        $res = 0;
        break;
}

echo sprintf("%s\n", $res);