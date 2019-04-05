<?php

$n = intval(readline());
$people = [];
$sum = 0;

for ($i = 0; $i < $n; $i++) {
    $people[] = intval(readline());
    $sum += $people[$i];
}

echo implode(' ', $people) . PHP_EOL;
echo $sum;