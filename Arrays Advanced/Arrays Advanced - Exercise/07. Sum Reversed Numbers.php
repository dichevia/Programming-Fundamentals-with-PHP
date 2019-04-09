<?php

$array = explode(' ', readline());

for ($i = 0; $i <count($array) ; $i++){
    $currentNumber = $array[$i];
    $reversedNumber = strrev($currentNumber);
    array_splice($array, $i, 1, $reversedNumber);
}
$sum = array_sum($array);
echo $sum;