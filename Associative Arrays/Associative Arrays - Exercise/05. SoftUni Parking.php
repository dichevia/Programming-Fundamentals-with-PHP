<?php

$n = intval(readline());
$parkedCars = [];

for ($i = 0; $i < $n; $i++) {
    $input = readline();
    $tokens = explode(' ', $input);
    $register = $tokens[0];
    $username = $tokens[1];
    if ($register == 'register') {
        $licensePlate = $tokens[2];
        if (!key_exists($username, $parkedCars)) {
            $parkedCars[$username] = [];
            $parkedCars[$username] = $licensePlate;
            echo "$username registered $parkedCars[$username] successfully" . PHP_EOL;
        } else {
            echo "ERROR: already registered with plate number $parkedCars[$username]" . PHP_EOL;
        }
    }
    if ($register == 'unregister') {
        if (key_exists($username, $parkedCars)) {
            unset($parkedCars[$username]);
            echo "$username unregistered successfully" . PHP_EOL;
        } else {
            echo "ERROR: user $username not found" . PHP_EOL;
        }
    }
}

foreach ($parkedCars as $name => $license) {
    echo $name . ' => ' . $license . PHP_EOL;
}