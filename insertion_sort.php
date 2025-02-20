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
    $currentValue = $myArray[$i];

    // check unsorted value with sorted part values
    for ($j = $i - 1; $j > -1; $j--) {
        if ($myArray[$j] > $currentValue) {
            // shift up $j index value
            $myArray[$j + 1] = $myArray[$j];
            // change insert index for swapping
            $insertIndex = $j;
        } else {
            break;
        }
    }

    // insert unsorted value in right position
    $myArray[$insertIndex] = $currentValue;
}

// print sorted values
echo implode(', ', $myArray);
