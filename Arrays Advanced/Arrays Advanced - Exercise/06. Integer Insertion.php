<?php

$array = array_map('intval', explode(' ', readline()));
$insert = readline();

while ($insert !== 'end') {
    $index = intval($insert[0]);
    $number = intval($insert);

    array_splice($array, $index, 0, $number);

    $insert = readline();
}

echo implode(' ', $array);