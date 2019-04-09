<?php

$array = array_map('intval', explode(' ', readline()));
$indexes = intval(readline());
$removed = [];
$counter = -1;

while (count($array) !== 0) {
    $counter++;
    if ($indexes < 0 || $indexes > count($array) - 1) {
        if ($indexes < 0) {
            $removedInteger = array_shift($array);
            array_unshift($array, $array[count($array) - 1]);
            $removed [] = $removedInteger;
        } elseif ($indexes > count($array) - 1) {
            $removedInteger = array_pop($array);
            array_push($array, $array[0]);
            $removed [] = $removedInteger;
        }
    } else {
        $removedInteger = array_splice($array, $indexes, 1);
        $removed [] = $removedInteger[0];
    }
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] <= $removed[$counter]) {
            $increased = $array[$i] + $removed[$counter];
            array_splice($array, $i, 1, $increased);
        } elseif ($array[$i] > $removed[$counter]) {
            $decreased = $array[$i] - $removed[$counter];
            array_splice($array, $i, 1, $decreased);
        }
    }

    $indexes = intval(readline());
}

echo array_sum($removed);