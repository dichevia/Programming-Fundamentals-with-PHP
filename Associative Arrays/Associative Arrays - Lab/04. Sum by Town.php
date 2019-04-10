<?php

$arr = explode(', ', readline());
$cities = [];

for ($i = 0; $i < count($arr); $i++) {
    if ($i % 2 == 0) {
        if (!key_exists($arr[$i], $cities)) {
            $cities[$arr[$i]] = 0;
        }
        $cities[$arr[$i]] += $arr[$i + 1];
    }
}

foreach ($cities as $city => $income) {
    echo $city . ' => ' . $income . PHP_EOL;
}