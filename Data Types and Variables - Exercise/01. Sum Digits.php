<?php

$number = intval(readline());

$numberLength = strlen($number);
$sumOfDigits = 0;

for ($i = 0; $i < $numberLength; $i++) {
    $currentDigit = $number % 10;
    $sumOfDigits += $currentDigit;
    $number = $number / 10;
}
echo $sumOfDigits;