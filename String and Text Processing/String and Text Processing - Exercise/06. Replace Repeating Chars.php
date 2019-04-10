<?php

$str = readline();
$repeated = '';
$newStr = '';
$length = strlen($str);

for ($i = 1; $i <= $length; $i++) {
    $lastLetter = $str[$i - 1];
    if ($i==$length){
        $newStr[strlen($newStr)]=$lastLetter;
        break;
    }
    if ($lastLetter != $str[$i]) {
        $newStr .= $lastLetter;
        $repeated = '';
    } else {
        $repeated .= $str[$i];
    }
}
echo $newStr;