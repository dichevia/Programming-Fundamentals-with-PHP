<?php

$daysAdventure = intval(readline());
$countPlayers = intval(readline());
$groupsEnergy = floatval(readline());
$waterPerDay = floatval(readline());
$foodPerDay = floatval(readline());

$allWater = $countPlayers * $waterPerDay * $daysAdventure;
$allFood = $countPlayers * $foodPerDay * $daysAdventure;

for ($i = 1; $i <= $daysAdventure; $i++) {
    $energyLost = floatval(readline());
    $groupsEnergy -= $energyLost;
    if ($groupsEnergy <= 0) {
        break;
    }
    if ($i % 2 == 0) {
        $boostEnergy = $groupsEnergy * 0.05;
        $groupsEnergy += $boostEnergy;
        $waterDrop = $allWater * 0.3;
        $allWater -= $waterDrop;
    }
    if ($i % 3 == 0) {
        $allFood -= $allFood / $countPlayers;
        $boostEnergy = $groupsEnergy * 0.1;
        $groupsEnergy += $boostEnergy;
    }
}

if ($groupsEnergy > 0) {
    $groupsEnergy = number_format($groupsEnergy, 2, '.', '');
    echo "You are ready for the quest. You will be left with - $groupsEnergy energy!";
} else {
    $allFood = number_format($allFood, 2, '.', '');
    $allWater = number_format($allWater, 2, '.', '');
    echo "You will run out of energy. You will be left with $allFood food and $allWater water.";
}
