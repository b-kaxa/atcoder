<?php
$str = trim(fgets(STDIN));

if (1 < strlen($str)) {
    printf("%s\n", substr($str, 0, strlen($str) - 1));
} elseif ('a' == $str) {
    printf("-1\n");
} elseif (1 == strlen($str)) {
    printf("a\n");
}