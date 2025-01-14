<?php

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

function mergeSortWithoutRecursion(array $array): array
{
    $step = 1;
    $n = count($array);

    while ($step < $n) {
        for ($i = 0; $i < $n; $i += 2 * $step) {
            // get left & right array with values 1, 2, 4... length
            $left = array_slice($array, $i, $step);
            $right = array_slice($array, $i + $step, $step);

            // merge to sort
            $merged = merge($left, $right);

            foreach ($merged as $j => $value) {
                // replace sorted value
                $array[$i + $j] = $value;
            }
        }

        $step *= 2;
    }

    return $array;
}

$myArray = [3, 7, 0, 6, -10, 15, 23.5, 55, -13];
$sortedArray = mergeSort($myArray);
echo implode(', ', $sortedArray);
$sortedArray2 = mergeSortWithoutRecursion($myArray);
printf("\n%s", implode(', ', $sortedArray2));
