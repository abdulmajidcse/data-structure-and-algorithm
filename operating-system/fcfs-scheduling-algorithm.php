<?php
// FCFS Scheduling Algorithm

$processCount = 0;
while ($processCount < 1) {
    // get user input
    $processCount = intval(readline("How many process? "));
}

// get user input for burst times
$processHistories = [];
echo "Enter burst time for $processCount process below.\n";
for ($i = 0; $i < $processCount; $i++) {
    $burstTime = floatval(readline("P" . $i + 1 . " = "));

    // calculate waiting time and turnaround time
    $lastIndex = $i - 1;
    if (!empty($processHistories[$lastIndex])) {
        $waitingTime = $processHistories[$lastIndex]['tt'];
        $turnAroundTime = $processHistories[$lastIndex]['tt'] + $burstTime;
    } else {
        $waitingTime = 0;
        $turnAroundTime = $burstTime;
    }

    // add waiting time and turnaround time
    $processHistories[] = [
        'wt' => $waitingTime,
        'tt' => $turnAroundTime,
    ];
}

echo "\nWaiting Time:\n";
$totalWt = 0;
foreach ($processHistories as $key => $processHistory) {
    $totalWt += $processHistory['wt'];
    echo "P" . $key + 1 . " = " . $processHistory['wt'] . "\n";
}

echo "A.W.T = " . $totalWt / $processCount . "\n";

echo "\nTurnaround Time:\n";
$totalTt = 0;
foreach ($processHistories as $key => $processHistory) {
    $totalTt += $processHistory['tt'];
    echo "P" . $key + 1 . " = " . $processHistory['tt'] . "\n";
}

echo "A.T.T = " . $totalTt / $processCount . "\n";
