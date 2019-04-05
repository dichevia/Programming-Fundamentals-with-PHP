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
    $cost=0;
    $comm = explode(' ', $comm);
    foreach ($x as $i => $element) {
        if ($comm[0] === $element) {
            if($i > count($y)-1){
                $y[$i] = 0;
            }else {
                $cost = $z[$i]*$comm[1];
            }
            if ($comm[1]>$y[$i]){
               return $output =  "We do not have enough $x[$i]";
            }
            return $output = "$x[$i] x $comm[1] costs $cost";
        }
    }
}