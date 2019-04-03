<?php

$number1 = floatval(readline());
$number2 = floatval(readline());
$number3 = floatval(readline());

$max = max($number1, $number2, $number3);
$min = min($number1, $number2, $number3);
$mid = ($number1+$number2+$number3)-($max+$min);

printf ("%d\n%d\n%d\n", $max, $mid, $min);