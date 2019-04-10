<?php

$text = explode(" ", readline());
$text = array_filter($text);
$results = [];

foreach ($text as $currentString) {
    $currentNumber = '';
    $currentSum = 0;
    preg_match_all('/[0-9]/m', $currentString, $matches, PREG_SET_ORDER, 0);
    foreach ($matches as $value) {
        $currentNumber .= implode('', $value);
    }
    $numStartPosition = strpos($currentString, $currentNumber);
    $numEndPosition = $numStartPosition + strlen($currentNumber);
    $inFront = substr($currentString, 0, $numStartPosition);
    $after = substr($currentString, $numEndPosition);
    $currentNumber = intval($currentNumber);
    if (ord($inFront) >= 65 && ord($inFront) <= 90) {
        $divider = ord($inFront) - 64;
        $currentSum += $currentNumber / $divider;
    } elseif (ord($inFront) >= 97 && ord($inFront) <= 122) {
        $multiplier = ord($inFront) - 96;
        $currentSum += $currentNumber * $multiplier;
    }
    if (ord($after) >= 65 && ord($after) <= 90) {
        $subtract = ord($after) - 64;
        $currentSum -= $subtract;
    } elseif (ord($after) >= 97 && ord($after) <= 122) {
        $add = ord($after) - 96;
        $currentSum += $add;
    }

    $results[] = $currentSum;
}

echo $finalResult = number_format(array_sum($results), 2, '.', '');