<?php

$batches = intval(readline());
$total = 0;
for ($i = 0; $i < $batches; $i++) {
    $flourGrams = intval(readline());
    $sugarGrams = intval(readline());
    $cocoaGrams = intval(readline());

    $flourCups = intval($flourGrams / 140);
    $sugarSpoons = intval($sugarGrams / 20);
    $cocoaSpoons = intval($cocoaGrams / 10);

    $min = min($flourCups, $sugarSpoons, $cocoaSpoons);

    if ($flourCups <= 0 || $sugarSpoons <= 0 || $cocoaSpoons <= 0) {
        echo 'Ingredients are not enough for a box of cookies.' . PHP_EOL;
    }
    $totalCookiesPerBake = intval((140 + 10 + 20) * $min / 25);
    $boxesPerBatch = intval($totalCookiesPerBake / 5);
    if ($boxesPerBatch != 0) {
        printf("Boxes of cookies: %d\n", $boxesPerBatch);
    }
    $total += $boxesPerBatch;
}
printf('Total boxes: %d', $total);


