<?php

$lostGames = intval(readline());
$headsetPrice = floatval(readline());
$mousePrice = floatval(readline());
$keyboardPrice = floatval(readline());
$displayPrice = floatval(readline());

$headsetCount = 0;
$mouseCount = 0;
$keyboardCount = 0;
$displayCount = 0;

$brokenHeadset = false;
$brokenMouse = false;
$brokenKeyboard = false;

for ($i = 1; $i <= $lostGames; $i++) {
    if ($i % 2 == 0) {
        $headsetCount++;
        $brokenHeadset = true;
    } else {
        $brokenHeadset = false;
    }
    if ($i % 3 == 0) {
        $mouseCount++;
        $brokenMouse = true;
    } else {
        $brokenMouse = false;
    }
    if ($brokenMouse && $brokenHeadset) {
        $keyboardCount++;
        $brokenKeyboard = true;
    } else {
        $brokenKeyboard = false;
    }
    if ($brokenKeyboard && $keyboardCount % 2 == 0) {
        $displayCount++;

    }
}
$total = $headsetPrice * $headsetCount + $mousePrice * $mouseCount + $keyboardPrice * $keyboardCount + $displayPrice * $displayCount;

printf('Rage expenses: %.2f lv.', $total);