<?php

$arr = explode(' ', readline());
$result = [];

foreach ($arr as $value) {
    if (!key_exists($value, $result)) {
        $result[$value] = 0;
    }
    $result[$value]++;
}

ksort($result);

foreach ($result as $key => $element) {
    echo $key . ' -> ' . $element . PHP_EOL;
}