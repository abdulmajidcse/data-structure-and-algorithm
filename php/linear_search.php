<?php

function linearSearch(array $array, int | float $targetValue): int
{
    foreach ($array as $key => $value) {
        if ($value == $targetValue) {
            return $key;
        }
    }

    return -1;
}

$myArray = [3, 7, 2, 9, 5];
$targetValue = 5;
$result = linearSearch($myArray, $targetValue);

if ($result != -1) {
    printf("Value %s found at index %s.", $targetValue, $result);
} else {
    printf("Value %s not found.", $targetValue);
}
