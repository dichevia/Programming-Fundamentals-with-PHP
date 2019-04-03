<?php

$n = intval(readline());
$m = intval(readline());
$y = intval(readline());

$counter = 0;
$originalN = $n;

while ($m <= $n) {
    $counter++;
    $n = $n - $m;
    if ($n != 0 && $originalN / $n == 2) {
        if ($y != 0) {
            $n = intval($n / $y);
        }
    }
}

echo $n . PHP_EOL;
echo $counter;