<?php

$n = intval(readline());
$catalogue = [];
$booksByLetter = [];

for ($i = 0; $i < $n; $i++) {
    $input = readline();
    list($name, $price) = explode(" : ", $input);
    if (!key_exists($name, $catalogue)) {
        $catalogue[$name] = $price;
    }
    $firstLetter = $name[0];
    if (!key_exists($firstLetter, $booksByLetter)) {
        $booksByLetter[$firstLetter][$name] = $catalogue[$name];
    } else {
        $booksByLetter[$firstLetter][$name] = $catalogue[$name];
    }
}

ksort($booksByLetter);

foreach ($booksByLetter as $letter => $titles) {
    echo $letter . PHP_EOL;
    ksort($titles);
    foreach ($titles as $title => $value) {
        echo $title . ": " . $value . PHP_EOL;
    }
}