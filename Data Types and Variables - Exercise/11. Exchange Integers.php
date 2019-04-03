<?php

$numberOne = intval(readline());
$numberTwo = intval(readline());

printf("Before:\na = %d\nb = %d\n", $numberOne, $numberTwo);

$numberOne = $numberOne + $numberTwo;
$numberTwo = $numberOne - $numberTwo;
$numberOne = $numberOne - $numberTwo;

printf("After:\na = %d\nb = %d", $numberOne, $numberTwo);