<?php

$n1 = readline();
$n2 = readline();
$result = '';
$reminder = 0;
$zero = true;

for ($i = strlen($n1) - 1; $i >= 0; $i--) {
    $currentDigit = strval($n1[$i] * $n2 + $reminder);
    if (strlen($currentDigit) > 1) {
        if ($i == 0) {
            $result .= $currentDigit[1];
            $result .= $currentDigit[0];
        } else {
            $result .= $currentDigit[1];
        }
    } else {
        if ($i == 0) {
            $result .= $currentDigit[0];
        } else {
            $result .= $currentDigit[0];
        }
    }
    if ($currentDigit > 9) {
        $reminder = $currentDigit[0];
    } else {
        $reminder = 0;
    }
}

for ($i = 0; $i < strlen($result); $i++) {
    if ($result[$i] !== '0') {
        $zero = false;
        break;
    }
}

if ($zero) {
    echo "0";
} else {
    echo strrev($result);
}