<?php

$numberOne = intval(readline());
$numberTwo = intval(readline());

function factorialDevision ($x, $y){
    $factorialX = 1;
    $factorialY = 1;
    for ($i = $x; $i >=1 ; $i--){
        $factorialX*=$i;
    }
    for ($j = $y; $j >=1 ; $j--){
        $factorialY*=$j;
    }
    printf ("%.2f", $factorialX/$factorialY);
}

factorialDevision($numberOne, $numberTwo);