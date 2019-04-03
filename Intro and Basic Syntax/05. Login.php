<?php

$username = readline();
$password = readline();
$counter = 0;

while (!($password == strrev($username))){
    echo 'Incorrect password. Try again.'.PHP_EOL;
    $counter++;
    $password = readline();
    if ($counter == 3){
        break;
    }
}
if ($password == strrev($username)){
    printf ('User %s logged in.', $username);
}else {
printf ('User %s blocked!', $username);
}
