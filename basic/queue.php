<?php

namespace Basic;

class Queue
{
    private $queue;
    private $size;

    public function __construct()
    {
        $this->queue = array();
        $this->size = 0;
    }

    public function enqueue($data)
    {
        $this->queue[] = $data;
        $this->size++;
    }

    public function dequeue()
    {
        if ($this->size > 0) {
            $this->size--;
            return array_shift($this->queue);
        }
        return null;
    }

    public function peek()
    {
        if ($this->size > 0) {
            return $this->queue[0];
        }
        return null;
    }

    public function isEmpty()
    {
        return $this->size == 0;
    }

    public function size()
    {
        return $this->size;
    }
}
