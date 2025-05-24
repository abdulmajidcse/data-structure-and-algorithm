<?php

$stack = [];

// Push
array_push($stack, 10);
array_push($stack, 20);
array_push($stack, 30);
array_push($stack, 40);
echo 'Stack: ' . implode(', ', $stack) . PHP_EOL;

// Pop
$element = array_pop($stack);
echo "Pop: {$element}" . PHP_EOL;

// Peek
$topElement = end($stack);
echo "Peek: {$topElement}" . PHP_EOL;

// isEmpty
$isEmpty = !boolval(count($stack));
echo "isEmpty: {$isEmpty}" . PHP_EOL;

// Size
$size = count($stack);
echo "Size: {$size}" . PHP_EOL;
