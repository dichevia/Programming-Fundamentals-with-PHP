<?php

$text = readline();
$rageText = '';
$textBeforeDigit = '';

for ($i = 0; $i <strlen($text) ; $i++){
    $currentNumber = '';
    $symbol = $text[$i];
    if (ord($symbol)>=48 && ord($symbol)<=57){
        $currentNumber.=$symbol;
        if (isset($text[$i+1])){
            $nextSymbol=$text[$i+1];
            if (ord($nextSymbol)>=48 && ord($nextSymbol)<=57){
                $currentNumber.=$nextSymbol;
            }
        }
        $currentNumber = intval($currentNumber);
        $textBeforeDigit=str_repeat($textBeforeDigit, $currentNumber);
        $rageText.=$textBeforeDigit;
        $textBeforeDigit = '';
    }
    if (ord($symbol)>=97 && ord($symbol)<=122){

        $symbol = chr(ord($symbol)-32);
        $textBeforeDigit.=$symbol;
    }else{
        if (!(ord($symbol)>=48 && ord($symbol)<=57)){
            $textBeforeDigit.=$symbol;
        }
    }
}

$uniqueSymbol = count (array_unique(str_split($rageText)));

echo "Unique symbols used: $uniqueSymbol\n$rageText";