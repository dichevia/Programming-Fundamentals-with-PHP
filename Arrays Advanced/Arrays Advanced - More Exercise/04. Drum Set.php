<?php

$savings = floatval(readline());
$drumSet = array_map('intval', explode(' ', readline()));
$initialDrumSet = $drumSet;
$hitPower = readline();

while ($hitPower !== "Hit it again, Gabsy!") {
    $hitPower = intval($hitPower);
    for ($i = 0; $i < count($drumSet); $i++) {
        $drumSet[$i] -= $hitPower;
        if ($drumSet[$i] <= 0) {
            if ($savings >= $initialDrumSet[$i] * 3) {
                $savings -= $initialDrumSet[$i] * 3;
                array_splice($drumSet, $i, 1, $initialDrumSet[$i]);
            } else {
                array_splice($drumSet, $i, 1);
                array_splice($initialDrumSet, $i, 1);
                $i--;
            }
        }
    }

    $hitPower = readline();
}

echo implode(' ', $drumSet) . PHP_EOL;
printf("Gabsy has %.2f", $savings);
echo "lv.";