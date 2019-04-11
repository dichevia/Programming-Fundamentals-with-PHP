<?php

$energy = 100;
$coins = 100;
$events = explode('|', readline());

for ($i = 0; $i < count($events); $i++) {
    $args = explode('-', $events[$i]);
    $name = $args[0];
    $number = $args[1];
    if ($name === 'rest') {
        if ($energy + $number > 100) {
            $gain = 100 - $energy;
            $energy = 100;
            echo "You gained $gain energy." . PHP_EOL;
        } else {
            $energy += $number;
            echo "You gained $number energy." . PHP_EOL;
        }
        echo "Current energy: $energy." . PHP_EOL;
    } elseif ($name === 'order') {
        if ($energy >= 30) {
            $coins += $number;
            $energy -= 30;
            echo "You earned $number coins." . PHP_EOL;
        } else {
            $energy += 50;
            echo "You had to rest!" . PHP_EOL;
        }

    } else {
        if ($coins - $number > 0) {
            $coins -= $number;
            echo "You bought $name." . PHP_EOL;
        } else {
            echo "Closed! Cannot afford $name." . PHP_EOL;
            return;
        }

    }
}

echo "Day completed!\nCoins: $coins\nEnergy: $energy";