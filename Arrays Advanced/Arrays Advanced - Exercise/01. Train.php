<?php

$listOfWagons = array_map('intval', explode(' ', readline()));
$maxCapacity = readline();
$command = readline();

while ($command != 'end') {
    $token = explode(' ', $command);
    if ($token[0] == 'Add') {
        $listOfWagons [] = intval($token[1]);
    } else {
        $newPassengers = intval($token[0]);
        foreach ($listOfWagons as $i => $passengers) {
            if ($passengers + $token[0] <= $maxCapacity) {
                array_splice($listOfWagons, $i, 1, $passengers + $newPassengers);
                break;
            }
        }
    }
    $command = readline();
}

echo implode(' ', $listOfWagons);