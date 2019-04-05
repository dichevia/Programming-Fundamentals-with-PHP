<?php

$input = intval(readline());
$arrayResult = [];

for ($i = 0; $i < $input; $i++) {
    $string = readline();
    $array = str_split($string);
    $sum = 0;
    for ($j = 0; $j < count($array); $j++) {
        if (($array[$j]) == 'a' || ($array[$j]) == 'e' || ($array[$j]) == 'i'
            || ($array[$j]) == 'o' || ($array[$j]) == 'u') {
            $sum += (int)(ord($array[$j]) * strlen($string));
        } else {
            $sum += (int)(ord($array[$j]) / strlen($string));
        }
    }
    $arrayResult [] = $sum;
    sort($arrayResult);
}
foreach ($arrayResult as $value) {
    echo $value . PHP_EOL;
}