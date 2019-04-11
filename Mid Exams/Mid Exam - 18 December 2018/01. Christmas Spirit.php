<?php

$quantity = intval(readline());
$days = intval(readline());
$christmasSpirit = 0;
$price = 0;

for ($day = 1; $day <= $days; $day++) {
    if ($day % 11 == 0) {
        $quantity += 2;
    }
    if ($day % 2 == 0) {
        $price += 2 * $quantity;
        $christmasSpirit += 5;
    }
    if ($day % 3 == 0) {
        $price += 5 * $quantity + 3 * $quantity;
        $christmasSpirit += 13;
    }
    if ($day % 5 == 0) {
        $price += 15 * $quantity;
        $christmasSpirit += 17;
        if ($day % 3 == 0) {
            $christmasSpirit += 30;
        }
    }
    if ($day % 10 == 0) {
        $price += 23;
        $christmasSpirit -= 20;
    }
    if ($day % $days == 0 && $day % 10 == 0) {
        $christmasSpirit -= 30;
    }
}

echo "Total cost: $price\nTotal spirit: $christmasSpirit";