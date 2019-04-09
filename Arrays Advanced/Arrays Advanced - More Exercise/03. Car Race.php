<?php

$array = array_map('intval', explode(' ', readline()));
$timeLeft = 0;
$timeRight = 0;


for ($i = 0; $i < intval(count($array) / 2); $i++) {

    if ($array[$i] == 0) {
        $timeLeft *= 0.8;
    }
    $timeLeft += $array[$i];

}

for ($i = count($array) - 1; $i > intval(count($array) / 2); $i--) {

    if ($array[$i] == 0) {
        $timeRight *= 0.8;
    }
    $timeRight += $array[$i];

}

if ($timeLeft < $timeRight) {
    echo "The winner is left with total time: $timeLeft";
} else {
    echo "The winner is right with total time: $timeRight";
}