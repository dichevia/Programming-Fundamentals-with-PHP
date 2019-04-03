<?php

$balance = floatval(readline());
$spent = $balance;
$price = 0;


while (true) {
    $validGame = true;
    $game = readline();
    switch ($game) {
        case 'OutFall 4':
            $price = 39.99;
            break;
        case 'CS: OG':
            $price = 15.99;
            break;
        case 'Zplinter Zell':
            $price = 19.99;
            break;
        case 'Honored 2':
            $price = 59.99;
            break;
        case 'RoverWatch':
            $price = 29.99;
            break;
        case 'RoverWatch Origins Edition':
            $price = 39.99;
            break;
        default:
            if ($game != 'Game Time') {
                echo 'Not Found' . PHP_EOL;
                $validGame = false;
            }
    }


    if ($game == 'Game Time') {
        break;
    }

    if ($price > $balance && $validGame) {
        echo 'Too Expensive' . PHP_EOL;
    } elseif ($price <= $balance && $validGame) {
        $balance -= $price;
        printf("Bought %s\n", $game);
    }


    if ($balance == 0) {
        echo 'Out of money!' . PHP_EOL;
        return;
    }

}
if ($game == 'Game Time') {
    printf("Total spent: $%.2f. Remaining: $%.2f", $spent - $balance, $balance);
}