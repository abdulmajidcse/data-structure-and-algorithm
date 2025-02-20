<?php

/**
 * Circular Singly Linked List
 */

class Node
{
    public function __construct(public int $data, public ?Node $next = null) {}
}

// Add node data
$node1 = new Node(4); // Head node
$node2 = new Node(8);
$node3 = new Node(12);
$node4 = new Node(16); // Tail node

// Add next node links
$node1->next  = $node2;
$node2->next = $node3;
$node3->next = $node4;
$node4->next = $node1;

$currrentNode = $node1;
$startNode = $node1;
printf("%d -> ", $currrentNode->data);
$currrentNode = $currrentNode->next;

while ($currrentNode != $startNode) {
    printf("%d -> ", $currrentNode->data);
    $currrentNode = $currrentNode->next;
}

echo "...\n";