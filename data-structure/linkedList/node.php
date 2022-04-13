<?php

namespace Structure\LinkedList;

class Node
{
    private $data;
    private $next;
    private $prev;

    public function __construct($data, $next = null, $prev = null)
    {
        $this->data = $data;
        $this->next = $next;
        $this->prev = $prev;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function setNext(Node $next = null)
    {
        $this->next = $next;
    }

    public function getPrev()
    {
        return $this->prev;
    }

    public function setPrev(Node $prev = null)
    {
        $this->prev = $prev;
    }

    public function hasNext()
    {
        return $this->next != null;
    }

    public function hasPrev()
    {
        return $this->prev != null;
    }
}
