<?php

$array = array_map('intval', explode(' ', readline()));

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < 0) {
        array_splice($array, $i, 1);
        $i--;
    }
}

if (count($array) == 0) {
    echo 'empty';
} else {
    $array = array_reverse($array);
    echo implode(' ', $array);
}