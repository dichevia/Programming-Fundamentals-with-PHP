<?php

$numberOfSnowballs = readline();
$snowballValue = 0;
$snowballSnow = 0;
$snowballTime = 0;
$snowballQuality = 0;

for ($i = 1; $i <= $numberOfSnowballs; $i++) {
    $currentSnowballSnow = readline();
    $currentSnowballTime = readline();
    $currentSnowballQuality = readline();

    $currentSnowballValue = bcpow(bcdiv($currentSnowballSnow, $currentSnowballTime), $currentSnowballQuality);
    if ($currentSnowballValue > $snowballValue) {
        $snowballValue = $currentSnowballValue;
        $snowballSnow = $currentSnowballSnow;
        $snowballTime = $currentSnowballTime;
        $snowballQuality = $currentSnowballQuality;
    }
}

printf("%s : %s = %s (%s)", $snowballSnow, $snowballTime, $snowballValue, $snowballQuality);