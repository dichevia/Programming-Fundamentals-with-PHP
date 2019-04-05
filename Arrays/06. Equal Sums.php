<?php

$array = array_map('intval', explode(' ', readline()));


$thereIs = false;

for ($i = 0; $i < count($array); $i++) {
    $sumRight = 0;
    $sumLeft = 0;
    for ($j = $i + 1; $j < count($array); $j++) {
        $sumRight += $array[$j];
    }
    for ($k = $i - 1; $k >= 0; $k--) {
        $sumLeft += $array[$k];
    }
    if ($sumLeft == $sumRight) {
        if ($sumLeft == 0 && $sumRight == 0) {
            $thereIs = true;
            echo $i;
        } else {
            $thereIs = true;
            echo $i;
        }
    }
}
if (!$thereIs) {
    echo 'no';
}