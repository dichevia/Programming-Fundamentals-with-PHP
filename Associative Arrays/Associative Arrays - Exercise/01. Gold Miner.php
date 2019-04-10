<?php

$resources = [];

while (true) {
    $type = readline();
    if ($type == 'stop') {
        break;
    }
    $karats = intval(readline());
    if (!key_exists($type, $resources)) {
        $resources[$type] = 0;
    }
    $resources[$type] += $karats;
}

foreach ($resources as $resource => $karats) {
    echo $resource . ' -> ' . $karats . 'K' . PHP_EOL;
}