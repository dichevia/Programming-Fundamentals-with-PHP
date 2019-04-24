<?php
$dishes = '/<(?<dishes>[a-z0-9]+)>/';
$house = '/\[(?<house>[A-Z0-9]+)\]/';
$laundry = '/{(?<laundry>.+)}/';
$dishesTime = 0;
$houseTime = 0;
$laundryTime = 0;
$totalTime = 0;

while (true) {
    $input = readline();
    if ($input === 'wife is happy') {
        break;
    }
    if (preg_match($dishes, $input, $matches)) {
        for ($i = 0; $i < strlen($matches['dishes']); $i++) {
            $currentChar = ord($matches['dishes'][$i]);
            if ($currentChar >= 48 && $currentChar <= 57) {
                $dishesTime += intval(chr($currentChar));
                $totalTime += intval(chr($currentChar));
            }
        }
    }
    if (preg_match($house, $input, $matches)) {
        for ($i = 0; $i < strlen($matches['house']); $i++) {
            $currentChar = ord($matches['house'][$i]);
            if ($currentChar >= 48 && $currentChar <= 57) {
                $houseTime += intval(chr($currentChar));
                $totalTime += intval(chr($currentChar));
            }
        }
    }
    if (preg_match($laundry, $input, $matches)) {
        for ($i = 0; $i < strlen($matches['laundry']); $i++) {
            $currentChar = ord($matches['laundry'][$i]);
            if ($currentChar >= 48 && $currentChar <= 57) {
                $laundryTime += intval(chr($currentChar));
                $totalTime += intval(chr($currentChar));
            }
        }
    }
}

echo "Doing the dishes - $dishesTime min.\nCleaning the house - $houseTime min.\nDoing the laundry - $laundryTime min.\nTotal - $totalTime min.";