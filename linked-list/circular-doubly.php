<?php

/**
 * Circular Doubly Linked List
 */

class Node
{
    public function __construct(public int $data, public ?Node $next = null, public ?Node $prev = null) {}
}

// Add node data
$node1 = new Node(5);
$node2 = new Node(8);
$node3 = new Node(2);
$node4 = new Node(15);

// Add node links
$node1->next = $node2;
$node1->prev = $node4;

$node2->next = $node3;
$node2->prev = $node1;

$node3->next = $node4;
$node3->prev = $node2;

$node4->next = $node1;
$node4->prev = $node3;

// Traversing forward
$currentNode = $node1;
$startNode = $node1;

echo "Traversing forward\n";
printf("%s -> ", $currentNode->data);
$currentNode = $currentNode->next;

while ($currentNode != $startNode) {
    printf("%s -> ", $currentNode->data);
    $currentNode = $currentNode->next;
}

echo "...";

// Traversing backward
$currentNode = $node4;
$startNode = $node4;

echo "\nTraversing backward\n";
printf("%s -> ", $currentNode->data);
$currentNode = $currentNode->prev;

while ($currentNode != $startNode) {
    printf("%s -> ", $currentNode->data);
    $currentNode = $currentNode->prev;
}
echo "...\n";
