<?php
$count = trim(fgets(STDIN));

if ($count % 3 == 0){
    printf("YES\n");
} else {
    printf("NO\n");
}
