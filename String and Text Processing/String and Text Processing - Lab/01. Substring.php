<?php

$toRemove = readline();
$string = readline();

while (strpos($string, $toRemove)!==false){
    $string = str_replace($toRemove, '', $string);
}

echo $string;