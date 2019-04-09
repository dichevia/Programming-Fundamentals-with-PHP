<?php

$array = array_map('intval', explode(' ', readline()));
$newArray = [];
$length = count($array);

for ($i = 0; $i < floor($length / 2); $i++) {
    $sum = $array[$i] + $array[count($array) - 1 - $i];
    $newArray [] = $sum;
}
if (count($array) % 2 != 0) {
    $newArray[] = $array[count($array) / 2];
}

echo implode(' ', $newArray);