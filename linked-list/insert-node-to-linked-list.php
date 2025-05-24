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

function insertNode($head, $newNode, $position)
{
    if ($position < 1) {
        return $head;
    }

    if ($position == 1) {
        $newNode->next = $head;
        return $newNode;
    }

    $currentNode = $head;
    for ($i = 2; $i < $position; $i++) {
        if (!$currentNode) {
            break;
        }

        $currentNode = $currentNode->next;
    }

    if ($currentNode) {
        $newNode->next = $currentNode->next;
        $currentNode->next = $newNode;
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

echo "Before insert a node \n";
traverse($node1);

$newNode = new Node(50);
$node1 = insertNode($node1, $newNode, 3);

echo "After insert a node \n";
traverse($node1);
