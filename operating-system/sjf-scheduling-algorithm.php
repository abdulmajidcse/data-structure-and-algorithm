<?php
// SJF Scheduling Algorithm

$processCount = 0;
while ($processCount < 1) {
    // get user input
    $processCount = intval(readline("How many process? "));
}

// get user input for burst times
$burstTimes = [];
echo "Enter burst time for $processCount process below.\n";
for ($i = 1; $i <= $processCount; $i++) {
    $p = "P$i";
    $burstTimes[$p] = floatval(readline("$p = "));
}

asort($burstTimes);
$waitingTime = 0;
$turnaroundTime = 0;
$processHistories = [];
foreach ($burstTimes as $key => $burstTime) {
    $turnaroundTime += $burstTime;
    $processHistories[$key] = [
        'waiting_time' => $waitingTime,
        'turnaround_time' => $turnaroundTime,
    ];

    $waitingTime += $burstTime;
}

ksort($processHistories);


echo "\nWaiting Time:\n";
$totalWaitingTime = 0;
foreach ($processHistories as $key => $processHistory) {
    $totalWaitingTime += $processHistory['waiting_time'];
    echo "$key = {$processHistory['waiting_time']}\n";
}

echo "Average Waiting Time = " . ($totalWaitingTime / $processCount) . "\n";

echo "\nTurnaround Time:\n";
$totalTurnaroundTime = 0;
foreach ($processHistories as $key => $processHistory) {
    $totalTurnaroundTime += $processHistory['turnaround_time'];
    echo "$key = {$processHistory['turnaround_time']}\n";
}

echo "Average Turnaround Time = " . ($totalTurnaroundTime / $processCount) . "\n";
