<?php

$x1 = readline();
$y1 = readline();
$x2 = readline();
$y2 = readline();

centrePoint($x1, $y1, $x2, $y2);


function centrePoint ($x1, $y1, $x2, $y2){

    $c1 = abs((pow($x1, 2) + pow($y1, 2)));
    $c2 = abs((pow($x2, 2) + pow($y2, 2)));

    if ($c2<$c1){
        echo "($x2, $y2)";
    }else {
        echo "($x1, $y1)";
    }
}