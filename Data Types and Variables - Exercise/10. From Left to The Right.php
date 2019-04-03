<?php

$n = intval(readline());
$leftString = 0;
$rightString = 0;
for ($i = 0; $i < $n; $i++) {
    $string = readline();
    $lengthString = strlen($string);
    for ($j = 0; $j < $lengthString; $j++) {
        if ($string [$j] == ' ') {
            $leftString = substr($string, 0, $j);
            $rightString = substr($string, $j+1, $lengthString);
        }
    }

    if ($leftString >= $rightString) {
        $sum = 0;
        $lengthString = strlen($leftString);
        for ($k = 0; $k <= $lengthString -1 ; $k++) {
            $digit = intval($leftString[$k]);
            $sum += $digit;
        }
        echo $sum . PHP_EOL;
    } else {
        $sum = 0;
        $lengthString = strlen($rightString);
        for ($l = 0; $l <= $lengthString -1; $l++) {
            $digit = intval($rightString[$l]);
            $sum += $digit;;
        }
        echo $sum . PHP_EOL;
    }
}