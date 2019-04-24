<?php

$bands = [];
$bandsTime = [];
$temp = [];

while (true) {
    $input = readline();
    if ($input === 'start of concert') {
        break;
    }
    $tokens = explode('; ', $input);
    $command = $tokens[0];
    $bandName = $tokens[1];
    if ($command == 'Add') {
        $members = explode(', ', $tokens[2]);
        if (!key_exists($bandName, $bands)) {
            $bands[$bandName] = $members;
        } else {
            $temp[$bandName] = $members;
            $bands[$bandName] = array_merge($bands[$bandName], $temp[$bandName]);
            $bands[$bandName] = array_unique($bands[$bandName]);
        }
    }
    if ($command == 'Play') {
        $time = $tokens[2];
        if (!key_exists($bandName, $bandsTime)) {
            $bandsTime[$bandName] = $time;
        } else {
            $bandsTime[$bandName] += $time;
        }
    }
}

uksort($bandsTime, function ($key1, $key2) use ($bandsTime) {
    if ($bandsTime[$key2] == $bandsTime[$key1]) {
        return $key1 <=> $key2;
    }
    return $bandsTime[$key2] <=> $bandsTime[$key1];
});

$bandToPrint = readline();
$totalTime = array_sum($bandsTime);
echo "Total time: $totalTime" . PHP_EOL;
foreach ($bandsTime as $band => $time) {
    echo "$band -> $time" . PHP_EOL;
}
echo "$bandToPrint" . PHP_EOL;
foreach ($bands[$bandToPrint] as $member) {
    echo "=> $member" . PHP_EOL;
}