<?php

$number = intval(readline());

function NxNMatrix($x)
{
    for ($i = 0; $i < $x; $i++) {
        echo "\n";
        for ($j = 0; $j < $x; $j++) {
            echo "$x ";
        }
    }
}

NxNMatrix($number);
