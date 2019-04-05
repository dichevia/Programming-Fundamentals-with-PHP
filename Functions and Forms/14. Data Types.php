<?php

$input = readline();
$intDoubleOrString = readline();

checkIntDoubleOrString($input, $intDoubleOrString);

function checkIntDoubleOrString($x, $y)
{
    if ($x == 'int') {
        echo $y * 2;
    } else if ($x == 'real') {
        printf("%.2f", $y * 1.5);
    } else if ($x == 'string'){
        printf("$%s$", $y);
    }
}

