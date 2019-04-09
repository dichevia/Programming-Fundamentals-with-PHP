<?php

$array = explode(' ', readline());
$array = array_filter($array, function ($value) {
    return $value !== '';
});
$array = array_map('intval', $array);
$operations = readline();
$invalidIndex = '';
while (true) {
    $token = [];
    $tokens = explode(' ', $operations);
    $tokens = array_filter($tokens, function ($value) {
        return $value !== '';
    });
    $tempTokens = [];
    foreach ($tokens as $i => $element) {
        $tempTokens[] = $element;
    }
    $tokens = array_splice($tempTokens, 0, count($tempTokens));
    if ($tokens[0] == 'End') {
        break;
    }
    foreach ($tokens as $el) {
        $token[] = $el;
    }
    if ($token[0] == 'Add') {
        array_push($array, $token[1]);
    } elseif ($token[0] == 'Insert') {
        if ($token[2] >= 0 && $token[2] <= count($array)) {
            array_splice($array, $token[2], 0, $token[1]);
        } else {
            $invalidIndex .= 'Invalid index' . PHP_EOL;
        }

    } elseif ($token[0] == 'Remove') {
        if ($token[1] >= 0 && $token[1] < count($array)) {
            array_splice($array, $token[1], 1);
        } else {
            $invalidIndex .= 'Invalid index' . PHP_EOL;
        }
    } elseif ($token[0] == 'Shift') {
        if ($token[1] == 'left') {
            for ($i = 0; $i < $token[2]; $i++) {
                $num = array_shift($array);
                array_push($array, $num);
            }
        } elseif ($token[1] == 'right') {
            for ($i = 0; $i < $token[2]; $i++) {
                $num = array_pop($array);
                array_unshift($array, $num);
            }
        }
    }

    $operations = readline();
}
echo $invalidIndex;
echo implode(' ', $array);