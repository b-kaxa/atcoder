<?php
$score = trim(fgets(STDIN));

if ($score <= 59) {
    printf("Bad\n");
    exit;
} else if ($score <= 89) {
    printf("Good\n");
    exit;
} else if ($score <= 99) {
    printf("Great\n");
    exit;
} else {
    printf("Perfect\n");
}