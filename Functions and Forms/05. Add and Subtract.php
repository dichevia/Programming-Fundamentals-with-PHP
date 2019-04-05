<?php

$numberOne = intval(readline());
$numberTwo = intval(readline());
$numberThree = intval(readline());

function addAndSubtract ($x, $y, $z){
    $result = ($x+$y)-$z;
    return $result;
}

echo addAndSubtract($numberOne, $numberTwo, $numberThree);