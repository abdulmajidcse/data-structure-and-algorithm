<?php

/**
 * Insertion Sort Algorithm
 */
$myArray = [64, 34, 25, 12, 22, 11, 90, 5];
$n = count($myArray);

// start iteration from second value
// because first value consider as sorted part
for ($i = 1; $i < $n; $i++) {
    // get unsorted index and value
    $insertIndex = $i;
    $currentValue = array_splice($myArray, $i, 1)[0];

    // check unsorted value with sorted part values
    for ($j = $i - 1; $j > -1; $j--) {
        if ($myArray[$j] > $currentValue) {
            // change insert index for swapping
            $insertIndex = $j;
        }
    }

    // insert unsorted value in right position
    array_splice($myArray, $insertIndex, 0, [$currentValue]);
}

// print sorted values
echo implode(', ', $myArray);
