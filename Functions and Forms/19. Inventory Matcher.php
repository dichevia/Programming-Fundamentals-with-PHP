<?php

$namesProduct = explode(' ', readline());
$quantities = explode(' ', readline());
$prices =  explode(' ', readline());

$command = readline();

while ($command != 'done') {
    $output = inventoryMatcher($namesProduct, $quantities, $prices, $command);
    echo $output . PHP_EOL;

    $command = readline();
}
function inventoryMatcher($x, $y, $z, $comm)
{
    foreach ($x as $i => $element) {
        if ($comm === $element) {
            return $output = "$x[$i] costs: $z[$i]; Available quantity: $y[$i]";
        }
    }
}