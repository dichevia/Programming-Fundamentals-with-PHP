<?php

$password = readline();

$validLength = passwordValidatorLength($password);
$validConsist = passwordValidatorConsist($password);
$validDigits = passwordValidatorDigit($password);

if (!$validLength) {
    echo 'Password must be between 6 and 10 characters' . PHP_EOL;
}
if (!$validConsist) {
    echo 'Password must consist only of letters and digits' . PHP_EOL;
}
if (!$validDigits) {
    echo 'Password must have at least 2 digits' . PHP_EOL;
}
if ($validLength && $validConsist && $validDigits) {
    echo 'Password is valid';
}

function passwordValidatorLength(string $x): bool
{
    if (strlen($x) >= 6 && strlen($x) <= 10) {
        return true;
    }
    return false;

}

function passwordValidatorConsist(string $x): bool
{
    for ($i = 0; $i < strlen($x); $i++) {
        $lettX = ord($x[$i]);
        if (($lettX >= 48 && $lettX <= 57) || ($lettX >= 65 && $lettX <= 90) ||
            ($lettX >= 97 && $lettX <= 122)) {
            $cons = true;
        } else {
            $cons = false;
            break;
        }
    }
    if ($cons) {
        return true;
    }
    return false;
}

function passwordValidatorDigit(string $x): bool
{
    $counter = 0;
    for ($i = 0; $i < strlen($x); $i++) {
        $lettX = ord($x[$i]);
        if ($lettX >= 48 && $lettX <= 57) {
            $counter++;
        }
    }
    if ($counter >= 2) {
        return true;
    }
    return false;
}
