<?php
// Least Recently Used (LRU) page replacement algorithm

function lruPageReplacement($pages, $capacity)
{
    $frames = [];
    $recent = []; // To track usage order
    $pageFaults = 0;

    echo "\nPage Reference\tFrames\n";

    foreach ($pages as $time => $page) {
        // Remove page from recent if it exists (for both hit and fault)
        $index = array_search($page, $recent);
        if ($index !== false) {
            unset($recent[$index]);
        }

        if (in_array($page, $frames)) {
            // Page hit: no replacement needed
        } else {
            // Page fault
            $pageFaults++;
            if (count($frames) < $capacity) {
                $frames[] = $page;
            } else {
                // Remove least recently used
                $lru = array_shift($recent);
                $lruIndex = array_search($lru, $frames);
                $frames[$lruIndex] = $page;
            }
        }

        // Add page as most recently used
        $recent[] = $page;

        // Display current frame status
        echo "$page\t\t[" . implode(" ", $frames) . "]\n";
    }

    return $pageFaults;
}

$input = readline("Enter the reference string (space-separated page numbers): ");
$pages = array_map('intval', explode(" ", trim($input)));

$capacity = (int) readline("Enter the number of frames: ");

// Validate inputs
if ($capacity < 1 || empty($pages)) {
    echo "Opps! Frame size must be positive, and reference string must not be empty.\n";
} else {
    $pageFaults = lruPageReplacement($pages, $capacity);
    echo "\nTotal Page Faults: $pageFaults\n";
}
