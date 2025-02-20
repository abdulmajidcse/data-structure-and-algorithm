<?php

/**
 * Linked List
 */
class Node
{
    public function __construct(public int $data, public ?Node $next = null) {}
}

// add node data
$node1 = new Node(5); // head node
$node2 = new Node(8);
$node3 = new Node(3);
$node4 = new Node(7); // tail node

// add next node link
$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;


$currentNode = $node1;

while ($currentNode) {
    printf("%s -> ", $currentNode->data);
    $currentNode = $currentNode->next;
}

echo "null";
