<?php
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));

if (strlen($a) < strlen($b)) {
    printf("%s\n", $b);
} else {
    printf("%s\n", $a);
}