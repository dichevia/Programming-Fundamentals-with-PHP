<?php

$health = 100;
$coins = 0;
$dungeonRooms = explode('|', readline());

for ($i = 0; $i < count($dungeonRooms); $i++) {
    list($cmd, $num) = explode(' ', $dungeonRooms[$i]);
    if ($cmd == 'potion') {
        if ($health + $num > 100) {
            $healed = 100 - $health;
            $health = 100;
            echo "You healed for $healed hp.\n";
        } else {
            $health = $health + $num;
            echo "You healed for $num hp.\n";
        }
        echo "Current health: $health hp.\n";
    } elseif ($cmd == 'chest') {
        $coins += $num;
        echo "You found $num coins.\n";
    } else {
        $health -= $num;
        if ($health > 0) {
            echo "You slayed $cmd.\n";
        } else {
            echo "You died! Killed by $cmd.\n";
            $i = $i + 1;
            echo "Best room: $i\n";
            return;
        }
    }
}

echo "You've made it!" . PHP_EOL . "Coins: $coins" . PHP_EOL . "Health: $health";