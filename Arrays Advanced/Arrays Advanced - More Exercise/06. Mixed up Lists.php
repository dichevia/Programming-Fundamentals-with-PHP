<?php

$arr1 = array_map('intval', explode(' ', readline()));
$arr2 = array_map('intval', explode(' ', readline()));

if (count($arr1) < count($arr2)) {
    $smallerSize = count($arr1);
    $remaining = array_splice($arr2, 0, 2);
} else {
    $smallerSize = count($arr2);
    $remaining = array_splice($arr1, count($arr2), 2);
}
$newArr = [];
$start = min($remaining);
$end = max($remaining);
for ($i = 0; $i < $smallerSize; $i++) {
    $newArr[] = $arr1[$i];
    $newArr[] = $arr2[$smallerSize - 1 - $i];
}
$result = [];
foreach ($newArr as $element) {
    if ($element > $start && $element < $end) {
        $result[] = $element;
    }
}
sort($result);
echo implode(' ', $result);