<?php

$juices = [];
$bottles = [];

while (true) {
    $input = readline();
    if ($input == "End") {
        break;
    }
    list($juiceName, $juiceQuantity) = explode(" =>", $input);
    if (!key_exists($juiceName, $juices)) {
        $juices[$juiceName] = 0;
    }
    $juices[$juiceName] += $juiceQuantity;
    if ($juices[$juiceName] >= 1000) {
        if (!key_exists($juiceName, $bottles)) {
            $bottles[$juiceName] = 0;
        }
        $temp = $juices[$juiceName];
        $bottles[$juiceName] += intval($juices[$juiceName] / 1000);
        $juices[$juiceName] = $temp - ($bottles[$juiceName] * 1000);
    }
}

foreach ($bottles as $juice=>$quantity){
    echo $juice." => ".$quantity.PHP_EOL;
}