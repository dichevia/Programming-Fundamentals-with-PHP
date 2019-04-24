<?php
$products = [];
while (true) {
    $input = readline();
    if ($input === 'END') {
        break;
    }
    $args = explode('->', $input);
    $command = $args[0];
    $store = $args[1];
    if ($command === 'Add') {
        $item = $args[2];
        if (strpos($item, ',')) {
            $items = explode(',', $item);
            foreach ($items as $item) {
                $products[$store][] = $item;
            }
        } else {
            $item = $args[2];
            $products[$store][] = $item;
        }
    }
    if ($command === 'Remove') {
        if (key_exists($store, $products)) {
            unset($products[$store]);
        }
    }
}

uksort($products, function ($key1, $key2) use ($products) {
    $count1 = count($products[$key1]);
    $count2 = count($products[$key2]);
    if ($count2 == $count1) {
        return $key2 <=> $key1;
    }
    return $count2 <=> $count1;
});

echo "Stores list:" . PHP_EOL;
foreach ($products as $store => $items) {
    echo $store . PHP_EOL;
    foreach ($items as $item) {
        echo "<<$item>>" . PHP_EOL;
    }
}