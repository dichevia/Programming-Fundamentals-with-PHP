<?php

$n = intval(readline());
$array = [];

for ($i = 0; $i <$n ; $i++){
    $product = readline();
    $array[]=$product;
}
sort($array);

for ($i = 0; $i <$n ; $i++){
    array_splice($array, $i, 1, ($i+1)."."."$array[$i]");
    echo $array[$i].PHP_EOL;
}
