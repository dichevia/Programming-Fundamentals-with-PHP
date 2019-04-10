<?php

$input = readline();
$output = [];

for ($i = 0; $i < strlen($input); $i++) {
    $currentChar = $input[$i];
    if (!key_exists($currentChar, $output)) {
        $output[$currentChar][] = $i;
    } else {
        $output[$currentChar][] = $i;
    }
}

foreach ($output as $letter => $positions) {
    echo "$letter:" . implode('/', $positions) . PHP_EOL;
}