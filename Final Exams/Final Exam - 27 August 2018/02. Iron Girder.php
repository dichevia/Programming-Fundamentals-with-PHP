<?php

$timePerTown = [];
$passengersPerTown = [];

while (true) {
    $input = readline();
    if ($input === 'Slide rule') {
        break;
    }
    $args = explode('->', $input);
    $passengers = $args[1];
    $tokens = explode(':', $args[0]);
    $town = $tokens[0];
    $command = $tokens[1];
    if ($command !== 'ambush') {
        $time = $tokens[1];
        if (!key_exists($town, $timePerTown)) {
            $timePerTown[$town] = $time;
            $passengersPerTown[$town] = $passengers;
        } else {
            $passengersPerTown[$town] += $passengers;
            if ($timePerTown[$town] > $time || $timePerTown[$town] == 0) {
                $timePerTown[$town] = $time;
            }
        }
    }
    if ($command === 'ambush') {
        if (key_exists($town, $timePerTown)) {
            $timePerTown[$town] = 0;
            $passengersPerTown[$town] -= $passengers;
        }
    }
}

uksort($timePerTown, function ($key1, $key2) use ($timePerTown) {
    if ($timePerTown[$key1] == $timePerTown[$key2]) {
        return $key1 <=> $key2;
    }
    return $timePerTown[$key1] <=> $timePerTown[$key2];
});

foreach ($timePerTown as $town => $time) {
    if ($time > 0 && $passengersPerTown[$town] > 0) {
        echo "$town -> Time: $time -> Passengers: $passengersPerTown[$town]" . PHP_EOL;
    }
}