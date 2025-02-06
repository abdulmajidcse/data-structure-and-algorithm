<?php
// FCFS Scheduling Algorithm

$processCount = 0;
while ($processCount < 1) {
    // get user input
    $processCount = intval(readline("How many process? "));
}

// time track
$waitingTime = 0;
$turnaroundTime = 0;
// get user input for burst times
$processHistories = [];
echo "Enter burst time for $processCount process below.\n";
for ($i = 1; $i <= $processCount; $i++) {
    // process
    $p = "P$i";
    // Input process burst time
    $burstTime = floatval(readline("$p = "));
    // turnaround time for current process
    $turnaroundTime += $burstTime;

    // add waiting time and turnaround time
    $processHistories[$p] = [
        'waiting_time' => $waitingTime,
        'turnaround_time' => $turnaroundTime,
    ];

    // waiting time for next process
    $waitingTime += $burstTime;
}

// Waiting time information
echo "\nWaiting Time:\n";
$totalWaitingTime = 0;
foreach ($processHistories as $key => $processHistory) {
    $totalWaitingTime += $processHistory['waiting_time'];
    echo "$key = {$processHistory['waiting_time']}\n";
}

echo "Average Waiting Time = " . ($totalWaitingTime / $processCount) . "\n";

// Turnaround time information
echo "\nTurnaround Time:\n";
$totalTurnaroundTime = 0;
foreach ($processHistories as $key => $processHistory) {
    $totalTurnaroundTime += $processHistory['turnaround_time'];
    echo "$key = {$processHistory['turnaround_time']}\n";
}

echo "Average Turnaround Time = " . ($totalTurnaroundTime / $processCount) . "\n";
