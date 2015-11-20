<?php

$std = trim(fgets(STDIN));
echo sprintf("%s\n", $std % 2 == 0 ? 'Blue' : 'Red');