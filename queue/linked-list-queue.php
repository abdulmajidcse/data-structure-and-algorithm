<?php

class Node
{
    public function __construct(public $data, public ?Node $next = null) {}
}

class Queue
{
    public ?Node $front = null, $rear = null;
    public int $length = 0;

    public function enqueue($data)
    {
        $newNode = new Node($data);
        if ($this->rear == null) {
            $this->front = $this->rear = $newNode;
        } else {
            $this->rear->next = $newNode;
            $this->rear = $newNode;
        }

        $this->length += 1;
    }

    public function dequeue()
    {
        if ($this->size() == 0) {
            return 'Queue is empty';
        }

        $temp = $this->front;
        $this->front = $temp->next;
        $this->length -= 1;
        if ($this->front == null) {
            $this->rear = null;
        }

        return $temp->data;
    }

    public function peek()
    {
        if ($this->size() == 0) {
            return 'Queue is empty';
        }

        return $this->front->data;
    }

    public function isEmpty()
    {
        return $this->size() == 0 ? 'True' : 'False';
    }

    public function size()
    {
        return $this->length;
    }

    public function printQueue()
    {
        $temp = $this->front;
        $queueList = '';
        while ($temp) {
            $queueList .= $temp->data . ' ';
            $temp = $temp->next;
        }

        return $queueList;
    }
}

$myQueue = new Queue;

// Enqueue
$myQueue->enqueue(10);
$myQueue->enqueue(20);
$myQueue->enqueue(30);
$myQueue->enqueue(40);

echo 'Queue: ' . $myQueue->printQueue() . PHP_EOL;

// Dequeue
echo 'Dequeue: ' . $myQueue->dequeue() . PHP_EOL;

// Peek
echo 'Peek: ' . $myQueue->peek() . PHP_EOL;

// isEmpty
echo 'isEmpty: ' . $myQueue->isEmpty() . PHP_EOL;

// Size
echo 'Size: ' . $myQueue->size() . PHP_EOL;
