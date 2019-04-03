<?php

$distanceM = intval(readline());

$distanceKM =round ( $distanceM/1000, 2);

printf("%.2f", $distanceKM);