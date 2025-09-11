<?php

function countingSort(array &$array)
{
    // get max value
    $maxValue = max($array);
    // create a count array
    $countArray = array_fill(0, $maxValue + 1, 0);

    // count values and store in count array
    foreach ($array as $value) {
        $countArray[$value] += 1;
    }

    // array replace index
    $index = 0;
    // traverse count array for sorting
    foreach ($countArray as $key => $value) {
        while ($value > 0) {
            // replace with sorted values
            $array[$index] = $key;
            --$value;
            ++$index;
        }
    }
}

$myArray = [4, 2, 2, 6, 3, 3, 1, 6, 5, 2, 3];

countingSort($myArray);
echo implode(', ', $myArray);
