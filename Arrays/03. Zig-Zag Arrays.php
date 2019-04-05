<?php

$n = intval(readline());
$arrayOne = [];
$arrayTwo = [];

for ($i = 0; $i < $n; $i++) {
    $input = readline();
    $tempArray = explode(' ', $input);
    if ($i % 2 == 0) {
        $arrayOne [] = $tempArray[0];
        $arrayTwo [] = $tempArray [1];
    } else {
        $arrayOne [] = $tempArray[1];
        $arrayTwo [] = $tempArray [0];
    }

}

echo implode(' ', $arrayOne) . PHP_EOL;
echo implode(' ', $arrayTwo);