<?php

$number = intval(readline());

for ($i = 1; $i <= $number; $i++) {
    echo PHP_EOL;
    for ($j = 1; $j <= $i; $j++) {
        echo "$i ";
    }
}