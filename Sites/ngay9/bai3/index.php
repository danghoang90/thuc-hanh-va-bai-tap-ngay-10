<?php
include_once 'Queue.php';

$priorityQueue = new PriorityQueue();
$priorityQueue->enqueue('Smith', 5);
$priorityQueue->enqueue('Jones', 4);
$priorityQueue->enqueue('Fehrenbach', 6);
$priorityQueue->enqueue('Brow', 1);
$priorityQueue->enqueue('Ingram', 1);

echo ("Danh sách bênh nhân: " . $priorityQueue);

echo ("Khám bệnh cho người đầu tiên trong hàng đợi: " . $priorityQueue->dequeue());
echo "<br>";
echo ("Danh sách bênh nhân còn lại: " . $priorityQueue);
echo "<br>";
echo ("Khám bệnh cho: " . $priorityQueue->dequeue());
echo "<br>";
echo ("Danh sách bênh nhân còn lại: " . $priorityQueue);
