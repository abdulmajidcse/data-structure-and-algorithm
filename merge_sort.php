<?php

function mergeSort(array $array): array
{
    $n = count($array);
    if ($n <= 1) {
        // array with single value
        return $array;
    }

    // get left & right side array
    $mid = intdiv($n, 2);
    $leftHalf = array_slice($array, 0, $mid);
    $rightHalf = array_slice($array, $mid);

    // sort left side array
    $sortedLeft = mergeSort($leftHalf);
    // sort right side array
    $sortedRight = mergeSort($rightHalf);

    // sorted array
    return merge($sortedLeft, $sortedRight);
}

function merge(array $left, array $right): array
{
    $result = [];

    $i = $j = 0;

    while ($i < count($left) && $j < count($right)) {
        // add lower value in result array first
        if ($left[$i] < $right[$j]) {
            $result[] = $left[$i];
            ++$i;
        } else {
            $result[] = $right[$j];
            ++$j;
        }
    }

    // add extra array values which are not sorted
    $result = array_merge($result, array_slice($left, $i));
    $result = array_merge($result, array_slice($right, $j));

    return $result;
}

$myArray = [3, 7, 0, 6, -10, 15, 23.5, 55, -13];
$sortedArray = mergeSort($myArray);
echo implode(', ', $sortedArray);
