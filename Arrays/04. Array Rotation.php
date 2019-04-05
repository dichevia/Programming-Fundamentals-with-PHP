<?php

$array = explode(' ', readline());
$rotations = intval(readline());

for ($i = 0; $i < $rotations; $i++) {
    $temp = $array[0];
    array(array_shift($array));
    $array [] = $temp;
}
echo implode(" ", $array);