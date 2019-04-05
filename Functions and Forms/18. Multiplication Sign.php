<?php

$num1 = intval(readline());
$num2 = intval(readline());
$num3 = intval(readline());

$sign = findSign($num1, $num2, $num3);
echo $sign;

function findSign($x, $y, $z)
{
    if ($x * $y > 0) {
        if ($z > 0) {
            return $sign = 'positive';
        } elseif ($z == 0) {
            return $sign = 'zero';
        }
        return $sign = 'negative';
    } elseif ($x * $y < 0) {
        if ($z > 0) {
            return $sign = 'negative';
        } elseif ($z == 0) {
            return $sign = 'zero';
        }
        return $sign = 'positive';
    } elseif ($x * $y == 0) {
        return $sign = 'zero';
    }
}