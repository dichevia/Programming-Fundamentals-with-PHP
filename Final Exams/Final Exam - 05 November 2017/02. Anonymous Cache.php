<?php

$dataSetsKey = [];
$dataSetsSize = [];
$cacheDataSetsKey = [];
$cacheDataSetsSize = [];

while (true) {
    $input = readline();
    if ($input === 'thetinggoesskrra') {
        break;
    }
    if (strpos($input, '|') === false) {
        $dataSet = $input;
        if (!key_exists($dataSet, $dataSetsKey)) {
            if (key_exists($dataSet, $cacheDataSetsKey)) {
                $temp = $cacheDataSetsKey[$dataSet];
                foreach ($temp as $value) {
                    $dataSetsKey[$dataSet][] = $value;
                }
                $dataSetsSize[$dataSet] = $cacheDataSetsSize[$dataSet];

            } else {
                $dataSetsKey[$dataSet] = [];
                $dataSetsSize[$dataSet] = 0;
            }
        }
    } else {
        $args = explode(' | ', $input);
        $dataSet = $args[1];
        list ($dataKey, $dataSize) = explode(' -> ', $args[0]);
        if (key_exists($dataSet, $dataSetsKey)) {
            $dataSetsKey[$dataSet][] = $dataKey;
            $dataSetsSize[$dataSet] += $dataSize;
        } else {
            $cacheDataSetsKey[$dataSet][] = $dataKey;
            if (key_exists($dataSet, $cacheDataSetsSize)) {
                $cacheDataSetsSize[$dataSet] += $dataSize;
            } else {
                $cacheDataSetsSize[$dataSet] = $dataSize;
            }
        }
    }
}
if (count($dataSetsKey) > 0) {
    $maxValue = 0;
    $maxKey = '';
    foreach ($dataSetsSize as $key => $value) {
        if ($value > $maxValue) {
            $maxValue = $value;
            $maxKey = $key;
        }
    }

    echo "Data Set: $maxKey, Total Size: $maxValue" . PHP_EOL;
    foreach ($dataSetsKey[$maxKey] as $key) {
        echo '$.' . $key . PHP_EOL;
    }
}
