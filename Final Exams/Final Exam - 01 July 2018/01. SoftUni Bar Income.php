<?php

$pattern = '/%(?<name>[A-Z]{1}[a-z]+)%[^|$%.]*<(?<product>[\w]+)>[^|$%.]*\|(?<count>[\d]+)\|[^|$%.\d]*(?<price>[[0-9]*\.?[0-9]*)\$/';
$sum = 0;
while (true) {
    $input = readline();
    if ($input === 'end of shift') {
        break;
    }
    if (preg_match($pattern, $input, $match)) {
        printf("%s: %s - %.2f\n", $match['name'], $match['product'], $match['count'] * $match['price']);
        $sum += $match['count'] * $match['price'];
    }
}

printf("Total income: %.2f", $sum);