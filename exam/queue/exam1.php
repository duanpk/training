<?php

namespace Structure\Queue;

require_once '../../data-structure/queue/queue.php';


$tasks = [2, 1, 3];
$tasksSorted = $tasks;
sort($tasksSorted);

$queue = new Queue($tasks);
$fee = 0;

foreach ($tasksSorted as $task) {
    while ($queue->peek() != $task) {
        $queue->enqueue($queue->dequeue());
        $fee += 1;
    }
    $queue->dequeue();
    $fee += 2;
}

echo "Fee: $fee\n";
