<?php

function radixSort(array &$array)
{
    // get max value from unsorted array
    $maxValue = max($array);
    // init exponential
    $exp = 1;
    while (intdiv($maxValue, $exp) > 0) {
        // radix array with empty sub array 
        $radixArray = array_fill(0, 10, []);

        foreach ($array as $value) {
            // get radix index
            $radixIndex = intdiv($value, $exp) % 10;
            // push unsorted value to radix array correct position
            $radixArray[$radixIndex][] = $value;
        }

        // init unsorted array index
        $index = 0;
        foreach ($radixArray as $subArray) {
            // get radix array sub array
            foreach ($subArray as $radixValue) {
                // push radix value into initial array
                $array[$index] = $radixValue;
                // increment unsorted array index to push next value
                ++$index;
            }
        }

        // increment for next exponential value
        $exp *= 10;
    }
}

$myArray = [170, 45, 75, 90, 802, 24, 2, 66];
radixSort($myArray);
echo implode(', ', $myArray);
