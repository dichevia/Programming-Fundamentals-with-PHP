<?php

$pathToFile = readline();

$arr = explode('\\', $pathToFile);
$file = array_splice($arr, -1 );
$file = implode('', $file);
$index = strripos($file, '.');
$name = substr($file, 0, $index);
$extension = substr($file, $index+1);

echo "File name: $name\nFile extension: $extension";