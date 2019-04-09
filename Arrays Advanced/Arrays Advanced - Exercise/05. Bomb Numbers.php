<?php

$array = array_map('intval', explode(' ', readline()));
$numberAndPower = array_map('intval', explode(' ', readline()));

$specialNumber = $numberAndPower[0];
$power = $numberAndPower[1];

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] === $specialNumber) {
        array_splice($array, $i + 1, $power);
        if ($power > $i) {
            for ($j = 0; $j <= $i; $j++) {
                array_shift($array);
            }
        } else {
            array_splice($array, $i - $power, $power + 1);
        }
        $i = 0;
    }
}
echo array_sum($array);