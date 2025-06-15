<?php

class Node
{
    public ?Node $next = null;

    public function __construct(public $data) {}
}

class Stack
{
    public ?Node $head = null;
    private int $size = 0;

    public function push($element)
    {
        $newNode = new Node($element);

        if ($this->head) {
            $newNode->next = $this->head;
        }

        $this->head = $newNode;
        $this->size += 1;
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            return 'Stack is empty';
        }

        $popNode = $this->head;
        $this->head = $this->head->next;
        $this->size -= 1;

        return $popNode->data;
    }

    public function peek()
    {
        if ($this->isEmpty()) {
            return 'Stack is empty';
        }

        return $this->head->data;
    }

    public function isEmpty()
    {
        return !boolval($this->stackSize());
    }

    public function stackSize()
    {
        return $this->size;
    }
}


$myStack = new Stack;

$myStack->push(10);
$myStack->push(20);
$myStack->push(30);
$myStack->push(40);
$myStack->push(50);

echo 'Pop: ' . $myStack->pop() . PHP_EOL;
echo 'Peek: ' . $myStack->peek() . PHP_EOL;
echo 'isEmpty: ' . $myStack->isEmpty() . PHP_EOL;
echo 'Size: ' . $myStack->stackSize() . PHP_EOL;
