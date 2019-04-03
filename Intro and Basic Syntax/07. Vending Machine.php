<?php

$input = readline();
$allCoins = 0;

while ($input != 'Start') {
    $coin = floatval($input);
    if ($coin == 2 || $coin == 1 || $coin == 0.5 || $coin == 0.2 || $coin == 0.1) {
        $allCoins += ($coin);
    } else {
        printf('Cannot accept ' . $coin . PHP_EOL);
        $allCoins += 0;
    }
    $input = readline();
}
$allCoins = round($allCoins, 2);
while ($input != 'End') {
    $input = readline();
    switch ($input) {
        case 'Nuts':
            if ($allCoins >= 2) {
                $allCoins -= 2;
                echo 'Purchased nuts' . PHP_EOL;
            } else {
                echo 'Sorry, not enough money' . PHP_EOL;
            }
            break;
        case 'Water':
            if ($allCoins >= 0.7) {
                $allCoins -= 0.7;
                echo 'Purchased water' . PHP_EOL;
            } else {
                echo 'Sorry, not enough money' . PHP_EOL;
            }
            break;
        case 'Crisps':
            if ($allCoins >= 1.5) {
                $allCoins -= 1.5;
                echo 'Purchased crisps' . PHP_EOL;
            } else {
                echo 'Sorry, not enough money' . PHP_EOL;
            }
            break;
        case 'Soda':
            if ($allCoins >= 0.8) {
                $allCoins -= 0.8;
                echo 'Purchased soda' . PHP_EOL;
            } else {
                echo 'Sorry, not enough money' . PHP_EOL;
            }
            break;
        case 'Coke':
            if ($allCoins >= 1) {
                $allCoins -= 1;
                echo 'Purchased coke' . PHP_EOL;
            } else {
                echo 'Sorry, not enough money' . PHP_EOL;
            }
            break;
        default:
            if ($input == 'End') {
                break;
            }
            echo 'Invalid product' . PHP_EOL;
    }
}
if ($input == 'End') {
    printf('Change: %.2f', $allCoins);
}