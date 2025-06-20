<?php

class Queue
{
    public array $queue = [];

    public function enqueue($data)
    {
        array_push($this->queue, $data);
    }

    public function dequeue()
    {
        if ($this->size() == 0) {
            return 'Queue is empty';
        }

        return array_shift($this->queue);
    }

    public function peek()
    {
        if ($this->size() == 0) {
            return 'Queue is empty';
        }

        return $this->queue[0];
    }

    public function isEmpty()
    {
        return $this->size() == 0 ? 'True' : 'False';
    }

    public function size()
    {
        return count($this->queue);
    }
}

$myQueue = new Queue;

// Enqueue
$myQueue->enqueue(10);
$myQueue->enqueue(20);
$myQueue->enqueue(30);
$myQueue->enqueue(40);

echo 'Queue: ' . implode(' ', $myQueue->queue) . PHP_EOL;

// Dequeue
echo 'Dequeue: ' . $myQueue->dequeue() . PHP_EOL;

// Peek
echo 'Peek: ' . $myQueue->peek() . PHP_EOL;

// isEmpty
echo 'isEmpty: ' . $myQueue->isEmpty() . PHP_EOL;

// Size
echo 'Size: ' . $myQueue->size() . PHP_EOL;
