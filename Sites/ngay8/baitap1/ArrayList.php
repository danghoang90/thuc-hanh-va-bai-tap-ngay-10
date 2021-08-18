<?php
class ArrayList
{

    private $list = array();

    public function insert($index, $ojb)
    {

    }

    public function Add($obj)
    {
        array_Push($this->list, $obj);
    }

    public function Remove($index)
    {
        if(array_key_exists($index, $this->list))
        {
            unset($this->list[$index]);
        }
    }

    public function clear()
    {
        $this->list = array();
    }

    public function Size()
    {
        return count($this->list);
    }

    public function IsEmpty()
    {
       if (count($this->list) == 0) {
           return true;
       }
       return false;
    }

    public function Get($index)
    {
        if(array_key_exists($index, $this->list))
        {
            return $this->list[$index];
        }
        else
        {
            return NULL;
        }
    }

    public function indexOf($obj)
    {
        $arrKeys = array_keys($this->list, $obj);

        if(empty($arrKeys))
        {
            return -1;
        }
        else
        {
            return $arrKeys[0];
        }
    }

    public function sort()
    {
        return sort($this->list);
    }

}