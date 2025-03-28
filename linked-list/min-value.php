<?php

/**
 * Lowest value from singly linked list
 */
class Node
{
    public function __construct(public int $data, public ?Node $next = null) {}
}

// Node Data
$node1 = new Node(40);
$node2 = new Node(7);
$node3 = new Node(15);
$node4 = new Node(20);

// Linking Nodes
$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;

// Traverse Linked List
$currentNode = $node1;
$minValue = $currentNode->data;
$currentNode = $currentNode->next;
while ($currentNode !== null) {
    if ($currentNode->data < $minValue) {
        $minValue = $currentNode->data;
    }

    $currentNode = $currentNode->next;
}

echo 'Min value: ' . $minValue . PHP_EOL;
