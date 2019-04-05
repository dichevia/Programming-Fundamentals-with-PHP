<?php

$array = array_map('intval', explode(' ', readline()));
$sizeArray = count($array);
$maxLength = 0;
$maxDigit = '';

for ($i = 0; $i < $sizeArray; $i++) {
    $currentLength = 1;
    for ($j = $i + 1; $j < $sizeArray; $j++) {
        if ($array[$i] == $array[$j]) {
            $currentLength++;
            if ($currentLength > $maxLength) {
                $maxLength = $currentLength;
                $maxDigit = $array[$i];
            }
        } else {
            break;
        }
    }
}
for ($i = 0; $i < $maxLength; $i++) {
    echo $maxDigit . ' ';
}