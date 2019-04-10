<?php

$arrayOfStrings = explode(' ', readline());
$repeated = '';

foreach ($arrayOfStrings as $string){
    $repeated.=str_repeat($string, strlen($string));
}

echo $repeated;