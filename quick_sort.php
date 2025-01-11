<?php

function partition(&$array, $low, $high)
{
    $pivot = $array[$high];
    // for pivot index
    $i = $low - 1;

    for ($j = $low; $j < $high; $j++) {
        if ($array[$j] <= $pivot) {
            // increment pivot index and swap value
            $i += 1;
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }

    // swap value and it's important when no swapping in iteration
    $temp = $array[$i + 1];
    $array[$i + 1] = $array[$high];
    $array[$high] = $temp;

    // pivot index
    return $i + 1;
}

function quickSort(&$array, $low, $high)
{
    if ($low < $high) {
        // get pivot index
        $pivotIndex = partition($array, $low, $high);
        // left side
        quickSort($array, $low, $pivotIndex - 1);
        // right side
        quickSort($array, $pivotIndex + 1, $high);
    }
}


$myArray = [64, 34, 25, 12, 22, 11, 90, 5];
$n = count($myArray);
quickSort($myArray, 0, $n - 1);

echo implode(', ', $myArray);
