<?php

$pattern = '/^([#$%*&]+)(?<name>[A-Za-z]+)(\1)(=)(?<geohashcode>[0-9]+)(!!)(?<encrypted>.*)$/';
$encrypted = '';

while (true){
    $input = readline();
    $input=trim($input);
    if (preg_match($pattern, $input, $matches) && ($matches['geohashcode']) == (strlen($matches['encrypted']))){
        $encrypt = trim($matches['encrypted']);
            for ($i=0; $i<strlen($encrypt); $i++){
                $currentSymbol = $encrypt[$i];
                $currentSymbol = chr(ord($currentSymbol)+intval($matches['geohashcode']));
                $encrypted.=$currentSymbol;
            }
            $name = $matches['name'];
            echo "Coordinates found! $name -> $encrypted";
            break;

    }else {
        echo "Nothing found!".PHP_EOL;
    }
}