<?php

$char1 = ord(readline());
$char2 = ord(readline());
$str = readline();
$sum = 0;

$min = min($char2, $char1);
$max = max($char2, $char1);

for ($i = 0; $i < strlen($str); $i++) {
    $currentChar = $str[$i];
    if (ord($currentChar) > $min && ord($currentChar) < $max) {
        $toAdd = ord($currentChar);
        $sum += $toAdd;
    }
}

echo $sum;