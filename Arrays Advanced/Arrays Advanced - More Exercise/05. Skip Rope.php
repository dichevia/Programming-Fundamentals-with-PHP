<?php

$string = readline();
$array = str_split($string);
$letters = [];
$digits = [];
$takeList = [];
$skipList = [];
$result = [];

for ($i = 0; $i < count($array); $i++) {
    if (ctype_digit($array[$i])) {
        $digits [] = $array[$i];
    } else {
        $letters [] = $array[$i];
    }
}

for ($j = 0; $j < count($digits); $j++) {
    if ($j % 2 == 0) {
        $takeList[] = $digits[$j];
    } else {
        $skipList[] = $digits[$j];
    }
}

$index = 0;
$temp = [];
for ($k = 0; $k < count($skipList); $k++) {
    $temp = array_splice($letters, $index, $takeList[$k]);
    $result[] = implode('', $temp);
    $index += $skipList[$k];
}

echo implode('', $result);