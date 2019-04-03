<?php

$num = intval(readline());
$num1 = $num;

$length = strlen($num);
$factorial = 0;


for ($i = 0; $i < $length; $i++) {
    $tempNum = $num % 10;
    $sum = $tempNum;
    for ($j = $tempNum; $j > 1; $j--) {
        $sum *= ($j - 1);
    }

    $factorial += $sum;
    if ($sum == 0) {
        $factorial += 1;
    }
    $num = $num / 10;
}
if ($num1 == $factorial) {
    echo 'yes';
} else {
    echo 'no';
}