<?php

$number = intval(readline());

function topInteger($x)
{
    for ($i = 1; $i <= $x; $i++) {
        $currentNumber = strval($i);
        $sumOfCurrentNumber = 0;
        $odd = false;
        for ($j = 0; $j < strlen($currentNumber); $j++) {
            $sumOfCurrentNumber += $currentNumber[$j];
            if ($currentNumber[$j] % 2 != 0) {
                $odd = true;
            }
        }
        if ($sumOfCurrentNumber % 8 == 0 && $odd) {
            echo "$i" . PHP_EOL;
        }
    }
}

topInteger($number);
