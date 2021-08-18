<?php
include_once 'Stack.php';

$stack = new Stack(20);
$arrOne = [0, 1, 2, 3, 4, 5];
echo "<pre>";
print_r($arrOne);
$count = count($arrOne);
for ($i = 0; $i < $count; $i++) {
    $stack->push($arrOne[$i]);
}
$arrTwo = [];
for ($i = 0; $i < $count; $i++) {
    array_push($arrTwo, $stack->pop());
}
echo "<pre>";
print_r($arrTwo);