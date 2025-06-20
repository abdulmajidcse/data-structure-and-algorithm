<?php

$queue = [];

// Enqueue
array_push($queue, 10);
array_push($queue, 20);
array_push($queue, 30);
array_push($queue, 40);

echo 'Queue: ' . implode(' ', $queue) . PHP_EOL;

// Dequeue
echo 'Dequeue: ' . array_shift($queue) . PHP_EOL;

// Peek
echo 'Peek: ' . (isset($queue[0]) ? $queue[0] : 'Queue is empty') . PHP_EOL;

// isEmpty
echo 'isEmpty: ' . (count($queue) == 0 ? 'True' : 'False') . PHP_EOL;

// Size
echo 'Size: ' . count($queue) . PHP_EOL;
