<?php

function binarySearch(array $array, int | float $targetValue): int
{
    $left = 0;
    $right = count($array) - 1;

    while ($left <= $right) {
        $mid = intdiv(($left + $right), 2);

        if ($array[$mid] == $targetValue) {
            return $mid;
        }

        if ($array[$mid] < $targetValue) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return -1;
}

$myArray = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
$targetValue = 11;
$result = binarySearch($myArray, $targetValue);

if ($result != -1) {
    printf("Value %s found at index %s.", $targetValue, $result);
} else {
    printf("Value %s not found.", $targetValue);
}
