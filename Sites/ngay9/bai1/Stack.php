<?php
class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10)
    {
    $this->stack = array();
    $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
        array_unshift($this->stack, $item);
        } else {
        throw new RunTimeException('Stack is full!');
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->stack);
    }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}

    $myStack = new Stack();
     $myStack->push('Kaido');
     $myStack->push('King');
     $myStack->push('Queen');
     $myStack->push('Jack');
     $myStack->push('Joker');
     var_dump($myStack);

echo "<br>";
echo $myStack->pop();
echo "<br>";
echo $myStack->pop();
echo "<br>";
echo $myStack->pop();
echo "<br>";

     $myStack->push('Number');
     $myStack->push('Ace');

    $myStack->isEmpty();

echo $myStack->pop();
echo $myStack->pop();
echo $myStack->pop();
echo $myStack->pop();
echo "<br>";
    $myStack->isEmpty();
    var_dump($myStack);

