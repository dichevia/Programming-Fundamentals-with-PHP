<?php

$array = array_map('intval', explode(' ', readline()));
$result = [];

for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array [$i] > $array[$j]) {
            $tempMax = $array[$i];
        } else {
            $tempMax = 0;
        }
    }
    if ($tempMax > 0 || $i == count($array)) {
        $result [] = $tempMax;
    }
}
$result[] = $array[count($array) - 1];
echo implode(' ', $result);

/*<?php

$array =  explode(' ', readline());

for ($i = 0; $i < count($array); $i++) {
    $isBigger = true;
    for ($j = $i + 1; $j < count($array); $j++) {

        if ($array [$j] >= $array[$i]) {
            $isBigger = false;
        }
    }
    if ($isBigger) {
        echo $array[$i]. ' ';
    }
}
*/
