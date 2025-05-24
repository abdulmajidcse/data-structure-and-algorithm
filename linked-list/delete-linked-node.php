<?php

class Node
{
    public function __construct(public $data, public ?Node $next = null) {}
}

function traverse($head)
{
    $currentNode = $head;
    while ($currentNode) {
        echo "{$currentNode->data} -> ";
        $currentNode = $currentNode->next;
    }

    echo "null" . PHP_EOL;
}

function delete($head, $deleteableNode)
{
    if ($head == $deleteableNode) {
        return $head->next;
    }

    $currentNode = $head;
    while ($currentNode->next && $currentNode->next != $deleteableNode) {
        $currentNode = $currentNode->next;
    }

    if ($currentNode->next) {
        $currentNode->next = $currentNode->next->next;
    }

    return $head;
}

$node1 = new Node(10);
$node2 = new Node(20);
$node3 = new Node(30);
$node4 = new Node(40);

$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;

echo "Before delete node \n";
traverse($node1);

$node1 = delete($node1, $node3);

echo "After delete node \n";
traverse($node1);
