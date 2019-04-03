<?php

$firstNumber = intval(readline());
$lastNumber = intval(readline());

$sum = 0;

for ($i = $firstNumber; $i <= $lastNumber; $i++){
    $sum += $i;
    echo "$i ";
}
echo ''.PHP_EOL;
printf ('Sum: %d', $sum);