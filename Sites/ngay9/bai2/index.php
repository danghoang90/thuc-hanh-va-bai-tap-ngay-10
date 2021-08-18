<?php
include_once 'Node.php';
include_once 'Queue.php';

$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
var_dump($queue);
echo "<br>";

$queue->dequeue();
$queue->dequeue();
var_dump($queue);
echo "<br>";


$queue->enqueue(4);
$queue->enqueue(5);
var_dump($queue);
echo "<br>";

$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
var_dump($queue);
echo "<br>";


