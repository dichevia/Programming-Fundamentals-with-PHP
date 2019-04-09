<?php

$array1 = array_map('intval', explode(' ', readline()));
$array2 = array_map('intval', explode(' ', readline()));
$mergedArray = [];

if (count($array1) < count($array2)) {
    $length = count($array1);
    $toAdd = array_splice($array2, count($array1));
} else {
    $length = count($array2);
    $toAdd = array_splice($array1, count($array2));
}

for ($i = 0; $i < $length; $i++) {
    $mergedArray [] = $array1[$i];
    $mergedArray [] = $array2[$i];
}
for ($i = 0; $i < count($toAdd); $i++) {
    $mergedArray[] = $toAdd[$i];
}
echo implode(' ', $mergedArray);