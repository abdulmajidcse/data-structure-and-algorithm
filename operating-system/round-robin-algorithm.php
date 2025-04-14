<?php
// Round Robin Algorithm

$processCount = intval(readline("How many process? "));
$timeQuantum = intval(readline("Time quantum = "));

// get user input for burst times
$burstTimes = [];
echo "Enter burst time for $processCount process below.\n";
for ($i = 1; $i <= $processCount; $i++) {
    $p = "P$i";
    $burstTimes[$p] = floatval(readline("$p = "));
}

// time track
$turnaroundTime = 0;
$processHistories = [];
while (count($burstTimes) > 0) {
    foreach ($burstTimes as $key => $burstTime) {
        if ($burstTime > $timeQuantum) {
            $executeTime = $timeQuantum;
            // update burst time for next round
            $burstTimes[$key] -= $executeTime;
        } else {
            $executeTime = $burstTime;
            // remove process from the list
            unset($burstTimes[$key]);
        }

        // turnaround time for current process
        $turnaroundTime += $executeTime;
        // store process history
        $processHistories[$key]['turnaround_time'] = $turnaroundTime;

        // waiting time for other processes
        foreach ($burstTimes as $k => $v) {
            if ($k != $key) {
                $processHistories[$k]['waiting_time'] =
                    ($processHistories[$k]['waiting_time'] ?? 0) + $executeTime;
            }
        }
    }
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
