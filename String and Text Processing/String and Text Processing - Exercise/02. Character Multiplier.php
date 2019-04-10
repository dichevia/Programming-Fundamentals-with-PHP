<?php

list ($str1, $str2) = explode(' ', readline());
$charsToAdd = 0;
$length = strlen($str1);
$sum = 0;
if (strlen($str1) > strlen($str2)) {
    $length = strlen($str2);
    for ($i = $length; $i < strlen($str1); $i++) {
        $charsToAdd += ord($str1[$i]);
    }
}
if (strlen($str1) < strlen($str2)) {
    $length = strlen($str1);
    for ($i = $length; $i < strlen($str2); $i++) {
        $charsToAdd += ord($str2[$i]);
    }
}

for ($i = 0; $i < $length; $i++) {
    $value1 = ord($str1[$i]);
    $value2 = ord($str2[$i]);
    $sum += $value1 * $value2;
}

echo $sum + $charsToAdd;