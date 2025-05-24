<?php

$arr = [19, 10, 30, 15, 40, 20, 4];

echo "Before sorted: " . implode(', ', $arr) . PHP_EOL;

$n = count($arr);
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}

echo "After sorted: " . implode(', ', $arr) . PHP_EOL;
