<?php

class Stack
{
    public array $stack = [];

    public function push($element)
    {
        array_push($this->stack, $element);
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            return 'Stack is empty';
        }

        return array_pop($this->stack);
    }

    public function peek()
    {
        if ($this->isEmpty()) {
            return 'Stack is empty';
        }

        return end($this->stack);
    }

    public function isEmpty()
    {
        return !boolval($this->size());
    }

    public function size()
    {
        return count($this->stack);
    }
}


$myStack = new Stack;

$myStack->push(10);
$myStack->push(20);
$myStack->push(30);
$myStack->push(40);
$myStack->push(50);

echo 'Stack: ' . implode(', ', $myStack->stack) . PHP_EOL;
echo 'Pop: ' . $myStack->pop() . PHP_EOL;
echo 'Peek: ' . $myStack->peek() . PHP_EOL;
echo 'isEmpty: ' . $myStack->isEmpty() . PHP_EOL;
echo 'Size: ' . $myStack->size() . PHP_EOL;
