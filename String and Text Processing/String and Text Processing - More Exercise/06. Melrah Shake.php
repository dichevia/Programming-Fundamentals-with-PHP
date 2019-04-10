<?php

$str = readline();
$pattern = readline();

while (true){
    if ($pattern == ''){
        break;
    }
    $index1St = strpos($str, $pattern);
    $index2St = strrpos($str, $pattern);
    if (($index1St!==false && $index2St!==false) && $index1St!==$index2St){
        $index1End = $index1St+strlen($pattern);
        $firstPart = substr($str, 0, $index2St);
        $beforePattern = substr($firstPart, 0, $index1St);
        $afterPattern = substr($firstPart, $index1End);
        $firstReady = $beforePattern.$afterPattern;
        $secondPart = substr($str, $index2St);
        $afterPattern2 = substr($secondPart, strlen($pattern));
        $secondReady = $afterPattern2;
        $str = $firstReady.$secondReady;
        echo 'Shaked it.'.PHP_EOL;
    }else {
        break;
    }
    $patternIndexToRemove = intval(strlen($pattern)/2);
    $patternF = substr($pattern, 0, $patternIndexToRemove);
    $patternS = substr($pattern, $patternIndexToRemove+1);
    $pattern=$patternF;
    $pattern.=$patternS;
}

echo 'No shake.'.PHP_EOL;
echo $str;