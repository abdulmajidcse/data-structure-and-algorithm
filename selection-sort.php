<?php

$arr = [19, 10, 30, 15, 40, 20, 4];

echo "Before sorted: " . implode(', ', $arr) . PHP_EOL;

$n = count($arr);
for ($i = 0; $i < $n; $i++) {
    $minIndex = $i;
    for ($j = $i + 1; $j < $n; $j++) {
        if ($arr[$minIndex] > $arr[$j]) {
            $minIndex = $j;
        }
    }

    $minValue = array_splice($arr, $minIndex, 1)[0];
    array_splice($arr, $i, 0, $minValue);
}

echo "After sorted: " . implode(', ', $arr) . PHP_EOL;
