<?php

/**
 * Doubly Linked List
 */
class Node
{
    public function __construct(public int $data, public ?Node $prev = null, public ?Node $next = null) {}
}

// add node data
$node1 = new Node(5); // head node
$node2 = new Node(8);
$node3 = new Node(3);
$node4 = new Node(7); // tail node

// add prev & next node link
$node1->next = $node2;

$node2->prev = $node1;
$node2->next = $node3;

$node3->prev = $node2;
$node3->next = $node4;

$node4->prev = $node3;

// forward traverse
echo "Forward traverse: ";
$currentNode = $node1;
while ($currentNode) {
    printf("%s -> ", $currentNode->data);
    $currentNode = $currentNode->next;
}
echo "null";

// backward traverse
echo "\nBackward traverse: ";
$currentNode = $node4;
while ($currentNode) {
    printf("%s -> ", $currentNode->data);
    $currentNode = $currentNode->prev;
}
echo "null";
