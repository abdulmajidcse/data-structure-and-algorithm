<?php

// Read total processes and resources
$processCount = (int)readline("Enter number of processes: ");
$resourceCount = (int)readline("Enter number of resource types: ");

// Read Allocation matrix
echo "Enter Allocation matrix (space-separated values for each process):\n";
$allocation = [];
for ($i = 0; $i < $processCount; $i++) {
    $line = readline("Allocation for P$i: ");
    $allocation[$i] = array_map('intval', explode(" ", $line));
}

// Read Max matrix
echo "\nEnter Max matrix (space-separated values for each process):\n";
$max = [];
for ($i = 0; $i < $processCount; $i++) {
    $line = readline("Max for P$i: ");
    $max[$i] = array_map('intval', explode(" ", $line));
}

// Read Available resources
$line = readline("\nEnter Available resources (space-separated): ");
$available = array_map('intval', explode(" ", $line));

// Calculate Need matrix
$need = [];
for ($i = 0; $i < $processCount; $i++) {
    for ($j = 0; $j < $resourceCount; $j++) {
        $need[$i][$j] = $max[$i][$j] - $allocation[$i][$j];
    }
}

// Banker's algorithm
$finish = array_fill(0, $processCount, false);
$safeSequence = [];

while (count($safeSequence) < $processCount) {
    $allocatedInThisLoop = false;

    for ($i = 0; $i < $processCount; $i++) {
        if (!$finish[$i]) {
            $canAllocate = true;
            for ($j = 0; $j < $resourceCount; $j++) {
                if ($need[$i][$j] > $available[$j]) {
                    $canAllocate = false;
                    break;
                }
            }

            if ($canAllocate) {
                for ($j = 0; $j < $resourceCount; $j++) {
                    $available[$j] += $allocation[$i][$j];
                }
                $safeSequence[] = "P$i";
                $finish[$i] = true;
                $allocatedInThisLoop = true;
            }
        }
    }

    if (!$allocatedInThisLoop) {
        break;
    }
}

// Print result
echo "\n";
if (count($safeSequence) === $processCount) {
    echo "System is in a SAFE state.\n";
    echo "Safe sequence: " . implode(" -> ", $safeSequence) . "\n";
} else {
    echo "System is in an UNSAFE state. No safe sequence found.\n";
}
