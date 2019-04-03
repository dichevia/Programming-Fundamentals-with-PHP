<?php

$floatNumberOne = floatval(readline());
$floatNumberTwo = floatval(readline());

if (abs($floatNumberOne - $floatNumberTwo) < 0.000001) {
    echo 'True';
} else {
    echo 'False';
}