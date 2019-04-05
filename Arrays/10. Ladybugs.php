<?php

$fieldSize = intval(readline());
$indexes = explode(' ', (readline()));
$field = [];

for ($i = 0; $i < $fieldSize; $i++) {
    $field[] = 0;
}

for ($i = 0; $i < count($indexes); $i++) {
    $index = intval($indexes[$i]);
    if ($index >= 0 && $index < $fieldSize) {
        $field[$index] = 1;
    }

}
$input = readline();
while ($input !== 'end') {
    list ($index, $direction, $flyLength) = explode(' ', $input);
    if ($index < 0 || $index > $fieldSize || $field[$index] == 0) {
        $input = readline();
        continue;
    }
    $field[$index] = 0;
    if ($direction == 'right') {
        $index += $flyLength;
        while ($field[$index] == 1 && $index < $fieldSize) {
            $index += $flyLength;
        }
        if ($index < $fieldSize) {
            $field[$index] = 1;
        }
    } else {
        $index -= $flyLength;
        while ($field[$index] == 1 && $index >= 0) {
            $index -= $flyLength;
        }
        if ($index >= 0) {
            $field[$index] = 1;
        }
    }
    $input = readline();
}

echo implode(' ', $field);