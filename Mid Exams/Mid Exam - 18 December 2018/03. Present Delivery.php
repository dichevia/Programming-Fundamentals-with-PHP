<?php

$houses = explode('@', readline());
$santaPosition = 0;
$lastPosition = 0;

while (true) {
    $input = readline();
    if ($input == "Merry Xmas!") {
        break;
    }
    list($cmd, $jump) = explode(' ', $input);
    if ($cmd = 'Jump') {
        if ($santaPosition+$jump < count($houses)) {
            $santaPosition+=$jump;
        } else {
            $santaPosition = ($santaPosition+$jump) % count($houses);
        }
        if ($houses[$santaPosition] > 0) {
            $houses[$santaPosition] -= 2;
        } else {
            echo "House $santaPosition will have a Merry Christmas.\n";
        }
    }
    $lastPosition = $santaPosition;
}

$failedHouses = 0;

echo "Santa's last position was $lastPosition.\n";

foreach ($houses as $house) {
    if ($house !== 0) {
        $failedHouses++;
    }
}

if ($failedHouses > 0) {
    echo "Santa has failed $failedHouses houses.\n";
} else {
    echo "Mission was successful.\n";
}