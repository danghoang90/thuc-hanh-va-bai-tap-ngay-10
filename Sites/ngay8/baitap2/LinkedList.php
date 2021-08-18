<?php
include 'Node.php';

class LinkedList
{
      private $count = 0;
      private $firstNode;
      private $lastNode;

    function __construct()
    {
        $this->firstNode =NULL;
        $this->lastNode = Null;
        $this->count = 0;
    }

    public function add($data,$index)
    {
        $link = new Node($data);
        if ($this->firstNode == NULL || $index == 0){
            $this->addFirst($data);
        } else {
            $p = $this->firstNode;
            $c = $this->firstNode->next;
            for ($i = 1; $i < $index; $i++){
               $p = $c;
               $c = $c->next;
            }
            $p = $link;
            $c = $link->next;
        }
    }

    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode == NULL)
            $this->lastNode = $link;

        $this->count++;
    }
    function dell($index)
    {
        $p = $this->firstNode;
        $c = $this->firstNode->next;

            for ($i = 1 ; $i< $index; $i++) {
                $p = $c;
                $c = $c->next;
            }
            $p->next = $c->next;
            $this->count--;
    }
    public function delFirst()
    {
        if ($this->firstNode == NULL) {
            echo ('Không có gì để xoá');
        } else {
            $this->firstNode= $this->firstNode->next;
        }
        $this->count--;
    }

    public function addLast($data)
    {
        if ($this->firstNode != NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        }else {
            $this->addFirst($data);
        }
    }

    public function size()
    {
        return $this->count;
    }
    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;

        while ($current != NULL)
        {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}
