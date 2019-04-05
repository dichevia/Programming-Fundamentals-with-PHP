<?php
$number1 = readline();
$number2 = readline();
$number3 = readline();

function smallestThreeNumber($x, $y, $z)
{
    if ($x <= $y && $x <= $z) {
        $result = $x;
    } elseif ($y <= $x && $y <= $z) {
        $result = $y;
    } elseif ($z <= $x && $z <= $y) {
        $result = $z;
    }
    echo $result;
}

smallestThreeNumber($number1, $number2, $number3);
