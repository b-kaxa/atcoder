<?php
$count = trim(fgets(STDIN));

switch ($count) {
    case '1':
        $res = "1\n1";
        break;
    case '2':
        $res = "1\n2";
        break;
    case '3':
        $res = "2\n1\n2";
        break;
    case '4':
        $res = "1\n4";
        break;
    case '5':
        $res = "2\n1\n4";
        break;
    case '6':
        $res = "2\n2\n4";
        break;
    case '7':
        $res = "3\n1\n2\n4";
        break;
    case '8':
        $res = "2\n4\n4";
        break;
    case '9':
        $res = "2\n1\n8";
        break;
    case '10':
        $res = "2\n2\n8";
        break;
    default:
        $res = 0;
        break;
}

echo sprintf("%s\n", $res);