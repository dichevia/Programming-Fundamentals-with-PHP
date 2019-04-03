<?php

$group = readline();
$type = readline();
$day = readline();

switch ($type) {
    case 'Students':
        if ($day == 'Friday') {
            $price = 8.45;
        } elseif ($day == 'Saturday') {
            $price = 9.80;
        } elseif ($day == 'Sunday') {
            $price = 10.46;
        }
        break;
    case 'Business':
        if ($day == 'Friday') {
            $price = 10.90;
        } elseif ($day == 'Saturday') {
            $price = 15.60;
        } elseif ($day == 'Sunday') {
            $price = 16;
        }
        break;
    case 'Regular':
        if ($day == 'Friday') {
            $price = 15;
        } elseif ($day == 'Saturday') {
            $price = 20;
        } elseif ($day == 'Sunday') {
            $price = 22.50;
        }
        break;
}

if ($type == 'Students' && $group >= 30) {
    $totalPrice = ($price * $group) * 0.85;
} elseif ($type == 'Business' && $group >= 100) {
    $totalPrice = ($price * $group) - ($price * 10);
}elseif
    ($type == 'Regular' && $group >= 10 && $group <= 20){
    $totalPrice = ($price * $group) * 0.95;
}else {
        $totalPrice = $price * $group;
    }
    printf('Total price: %.2f', $totalPrice);
