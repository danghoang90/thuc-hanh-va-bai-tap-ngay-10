<?php
class Stack
{
    private $stack = [];
    private $limit;

    public function __construct($limit, $stack = [])
    {
        $this->limit = $limit;
        $this->stack = $stack;
    }

    public function push($data)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $data);
        } else {
            echo "Stack over flow!";
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->stack);
        } else {
            echo "Không còn gì để lấy! ";
        }
    }
    public function isEmpty()
    {
        return count($this->stack) == 0;
    }
}