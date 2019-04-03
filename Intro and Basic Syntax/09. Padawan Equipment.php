<?php

$amountOfMoney = floatval(readline());
$countOfStudents = intval(readline());
$sabre = floatval(readline());
$robe = floatval(readline());
$belt = floatval(readline());

$counter = 0;

$sabreCost = ceil($countOfStudents * 1.1);
$sabreSum = ($sabreCost * $sabre);
$sumBelts = $belt * $countOfStudents;
for ($i = 6; $i <= $countOfStudents; $i += 6) {
    $counter++;
}
$sumBelts -= $belt * $counter;
$equipment = $sabreSum + ($robe * $countOfStudents) + $sumBelts;

if ($amountOfMoney >= $equipment) {
    printf("The money is enough - it would cost %.2flv.", $equipment);
} else {
    printf("Ivan Cho will need %.2flv more.", $equipment - $amountOfMoney);
}