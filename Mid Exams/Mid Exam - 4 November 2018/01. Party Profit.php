<?php

$partySize = intval(readline());
$days = intval(readline());
$coins = 0;

for ($day = 1; $day <= $days; $day++) {
    if ($day % 10 == 0) {
        $partySize -= 2;
    }
    if ($day % 15 == 0) {
        $partySize += 5;
    }
    $coins += 50;
    $coins -= 2 * $partySize;

    if ($day % 3 == 0) {
        $coins -= 3 * $partySize;
    }
    if ($day % 5 == 0) {
        $coins += 20 * $partySize;
        if ($day % 3 == 0) {
            $coins -= 2 * $partySize;
        }
    }

}
$coinsPerPerson = floor($coins / $partySize);
echo "$partySize companions received $coinsPerPerson coins each.";