<?php

$charOne = readline();
$charTwo = readline();

function charsInRange($x, $y)
{
    $x = ord($x);
    $y = ord($y);
    if ($x > $y) {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
    for ($i = $x + 1; $i < $y; $i++) {
        echo chr($i) . ' ';
    }
}

charsInRange($charOne, $charTwo);