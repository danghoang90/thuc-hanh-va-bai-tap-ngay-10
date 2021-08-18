<?php
include_once "Stack.php";

decimalToBinary(15);

function decimalToBinary($number)
{
    $stack = new Stack(100);
    while ($number / 2 != 0) {
        $number = floor($number / 2);
        $stack->push($number % 2);

    }
    echo "(";

    for ($i = 0; $i < count($stack->stack); $i++) {
        echo $stack->pop();
    }
    echo ")B";
}
