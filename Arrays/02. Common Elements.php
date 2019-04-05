<?php

$arrayOne = explode(" ", readline());
$arrayTwo = explode(" ", readline());;
$arrayThree = [];

for ($i = 0; $i < count($arrayTwo); $i++) {
    for ($j = 0; $j < count($arrayOne); $j++) {
        if ($arrayTwo[$i] == $arrayOne[$j]) {
            $arrayThree [] = $arrayTwo[$i];
        }
    }
}
foreach ($arrayThree as $value) {
    echo $value . ' ';
}