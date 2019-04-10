<?php

$products = [];

while (true) {
    $input = readline();
    if ($input == "buy") {
        break;
    }
    list ($product, $price, $quantity) = explode(' ', $input);
    if (!key_exists($product, $products)) {
        $products[$product]['price'] = (double)$price;
        $products[$product] ['quantity']= (int)$quantity;
    }else {
        $products[$product]['price'] = (double)$price;
        $products[$product] ['quantity']+= (int)$quantity;
    }
}

foreach ($products as $product => $value) {
    echo $product . " -> ".number_format(array_product($value), 2, ".", "").PHP_EOL;
}