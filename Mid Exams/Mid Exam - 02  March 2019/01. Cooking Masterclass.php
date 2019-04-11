<?php

$budget = floatval(readline());
$students = intval(readline());
$floorPrice = floatval(readline());
$eggPrice = floatval(readline());
$apronPrice = floatval(readline());

$aprons = $apronPrice * ceil(1.2 * $students);
$aprons = intval($aprons);
$freePackages = floor($students / 5);
$freePackages = intval($freePackages);

$total = $aprons +($eggPrice*10*$students)+$floorPrice*($students-$freePackages);

if ($total<=$budget){
    printf("Items purchased for %.2f$.", $total);
}else {
    printf ("%.2f$ more needed.", $total-$budget);
}
