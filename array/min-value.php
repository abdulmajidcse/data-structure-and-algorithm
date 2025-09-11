<?php

$arr = [10, 20, 5, 30];

$min = $arr[0];

for ($i = 1; $i < count($arr); $i++) {
    if ($min > $arr[$i]) {
        $min = $arr[$i];
    }
}

echo "Lowest value: {$min}" . PHP_EOL;
