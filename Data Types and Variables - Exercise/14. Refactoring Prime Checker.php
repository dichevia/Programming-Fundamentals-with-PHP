<?php

$number = intval(readline());
for ($i = 2; $i <= $number; $i++) {
    $isTrue = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $isTrue = false;
            break;
        }
    }

    if ($isTrue)
        printf("%d -> true" . PHP_EOL, $i);
    else
        printf("%d -> false" . PHP_EOL, $i);
}
