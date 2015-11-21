<?php

for ($i=0; $i <4 ; $i++) {
    list($num[$i][0],$num[$i][1],$num[$i][2],$num[$i][3]) = explode(' ', trim(fgets(STDIN)));
}

for ($k=0; $k < 4; $k++) {
    for ($j=0; $j < 3; $j++) {
        if ($num[$k][$j] == $num[$k][$j + 1]) {
            echo sprintf("%s\n", 'CONTINUE');
            exit;
        }
    }
}

for ($l=0; $l < 4; $l++) {
    for ($o=0; $o < 3; $o++) {
        if ($num[$o][$l] == $num[$o + 1][$l]) {
            echo sprintf("%s\n", 'CONTINUE');
            exit;
        }
    }
}

echo sprintf("%s\n", 'GAMEOVER');