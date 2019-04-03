<?php

$balance = floatval(readline());
$remaining = $balance;

while (true) {
    $game = readline();
    if ($game == 'Game Time') {
        break;
    }
    switch ($game) {
        case 'OutFall 4':
            $price = 39.99;
            if ($balance >= $price) {
                $balance -= $price;
                printf("Bought %s\n", $game);
            } else {
                echo 'Too Expensive' . PHP_EOL;
            }
            break;
        case 'CS: OG':
            $price = 15.99;
            if ($balance >= $price) {
                $balance -= $price;
                printf("Bought %s\n", $game);
            } else {
                echo 'Too Expensive' . PHP_EOL;
            }
            break;
        case 'Zplinter Zell':
            $price = 19.99;
            if ($balance >= $price) {
                $balance -= $price;
                printf("Bought %s\n", $game);
            } else {
                echo 'Too Expensive' . PHP_EOL;
            }
            break;
        case 'Honored 2':
            $price = 59.99;
            if ($balance >= $price) {
                $balance -= $price;
                printf("Bought %s\n", $game);
            } else {
                echo 'Too Expensive' . PHP_EOL;
            }
            break;
        case 'RoverWatch':
            $price = 29.99;
            if ($balance >= $price) {
                $balance -= $price;
                printf("Bought %s\n", $game);
            } else {
                echo 'Too Expensive' . PHP_EOL;
            }
            break;
        case 'RoverWatch Origins Edition':
            $price = 39.99;
            if ($balance >= $price) {
                $balance -= $price;
                printf("Bought %s\n", $game);
            } else {
                echo 'Too Expensive' . PHP_EOL;
            }
            break;
        default:
            if ($game != 'Game Time') {
                echo 'Not Found' . PHP_EOL;
            }
    }
    if ($balance == 0) {
        echo 'Out of money!' . PHP_EOL;
        return;
    }
}
printf("Total spent: $%.2f. Remaining: $%.2f", $remaining - $balance, $balance);

