<?php

$char = readline();
$ascii = ord($char);

if ($ascii>= 65 && $ascii<=90){
    echo 'upper-case';
}elseif ($ascii>= 97 && $ascii<=122){
    echo 'lower-case';
}