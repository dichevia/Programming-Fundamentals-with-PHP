<?php

$array = array_map('floatval', explode(' ', readline()));

for ($i=0; $i<count($array)-1; $i++){
    if ($array[$i]===$array[$i+1]){
        $sumOfElements = $array[$i]+$array[$i+1];
        $array[$i]=$sumOfElements;
        array_splice($array, $i+1, 1 );
        $i=-1;
    }
}

echo implode(' ', $array);