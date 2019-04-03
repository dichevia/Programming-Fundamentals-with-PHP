<?php

$britishPounds = floatval(readline());

$dollars = round ($britishPounds*1.31, 3);

printf("%.3f", $dollars);