<?php

$pattern = '/(%(?<name>[A-Z]{1}[a-z]+)%)[^|$%.]*(<(?<product>[\w]+)>)[^|$%.]*(\|(?<count>[\d]+)\|)([^|$%.\d])*(?<price>([\d]+[.])?[\d]+)(\${1})/';
$totalSum = 0;

while (true) {
    $input = readline();
    if ($input === 'end of shift') {
        break;
    }
    if (preg_match($pattern, $input, $match)) {
        $match['price'] = floatval($match['price']);
        $currentTotal = $match['count'] * $match['price'];
        $currentTotal = number_format($currentTotal, 2, '.', '');
        echo $match['name'] . ": " . $match['product'] . ' - ' . $currentTotal . PHP_EOL;
        $totalSum += floatval($currentTotal);
    }
}

$totalSum = number_format($totalSum, 2, '.', '');
echo "Total income: $totalSum";