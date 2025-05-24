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

    $temp = $arr[$minIndex];
    $arr[$minIndex] = $arr[$i];
    $arr[$i] = $temp;
}

echo "After sorted: " . implode(', ', $arr) . PHP_EOL;
