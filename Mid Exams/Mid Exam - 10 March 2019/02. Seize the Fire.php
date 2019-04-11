<?php

$fires = explode('#', readline());
$water = intval(readline());
$totalEffort = 0;
$resultFire = [];

for ($i = 0; $i < count($fires); $i++) {
    $token = explode(' = ', $fires[$i]);
    $typeFire = $token[0];
    $range = intval($token[1]);
    if ($typeFire == 'High' && $range >= 81 && $range <= 125) {
        if ($water - $range >= 0) {
            $water -= $range;
            $effort = $range * 0.25;
            $totalEffort += $effort;
            $resultFire[] = $range;
        }
    }
    if ($typeFire == 'Medium' && $range >= 51 && $range <= 80) {
        if ($water - $range >= 0) {
            $water -= $range;
            $effort = $range * 0.25;
            $totalEffort += $effort;
            $resultFire[] = $range;
        }
    }
    if ($typeFire == 'Low' && $range >= 1 && $range <= 50) {
        if ($water - $range >= 0) {
            $water -= $range;
            $effort = $range * 0.25;
            $totalEffort += $effort;
            $resultFire[] = $range;
        }
    }
}

echo "Cells:" . PHP_EOL;
foreach ($resultFire as $fire) {
    echo " - " . $fire . PHP_EOL;
}
$totalEffort = number_format($totalEffort, 2, '.', '');
echo "Effort: $totalEffort" . PHP_EOL;
$sumFire = array_sum($resultFire);
echo "Total Fire: $sumFire";