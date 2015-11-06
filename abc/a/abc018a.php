<?php
$score = array();

for ($i=0; $i < 3; $i++) {
    $score[] = trim(fgets(STDIN));
}

if ($score[0] < $score[1] && $score[1] < $score[2] && $score[0] < $score[2]) {
    echo sprintf("3\n2\n1\n");
    exit;
} elseif ($score[0] < $score[1] && $score[1] > $score[2] && $score[0] < $score[2]) {
    echo sprintf("3\n1\n2\n");
    exit;
} elseif ($score[0] > $score[1] && $score[1] > $score[2] && $score[0] > $score[2]) {
    echo sprintf("1\n2\n3\n");
    exit;
} elseif ($score[0] > $score[1] && $score[1] < $score[2] && $score[0] > $score[2]) {
    echo sprintf("1\n3\n2\n");
    exit;
} elseif ($score[0] < $score[1] && $score[1] > $score[2] && $score[0] > $score[2]) {
    echo sprintf("2\n1\n3\n");
    exit;
} elseif ($score[0] > $score[1] && $score[1] < $score[2] && $score[0] < $score[2]) {
    echo sprintf("2\n3\n1\n");
    exit;
}