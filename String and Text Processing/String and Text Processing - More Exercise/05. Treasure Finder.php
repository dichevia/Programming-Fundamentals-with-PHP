<?php

$key = explode(' ', readline());
$counter = 0;
$newKey = [];

while (true) {
    $input = readline();
    $output = '';
    if ($input === 'find') {
        break;
    }
    for ($i = 0; $i < strlen($input); $i++) {
        $currentCharValue = ord($input[$i]);
        if (intval($counter) > intval(count($key) - 1)) {
            $counter = 0;
        }
        $currentKeyValue = intval($key[$counter]);
        $output .= chr($currentCharValue - $currentKeyValue);
        $counter++;
    }
    $firstItem = strpos($output, '&');
    $secondItem = strrpos($output, '&');
    $secondItem = $secondItem - $firstItem;
    $treasure = substr($output, $firstItem + 1, $secondItem - 1);

    $firstIndex = strpos($output, '<');
    $secondIndex = strrpos($output, '>');
    $secondIndex = $secondIndex - $firstIndex;
    $location = substr($output, $firstIndex + 1, $secondIndex - 1);

    echo "Found $treasure at $location" . PHP_EOL;

    $counter = 0;
}
