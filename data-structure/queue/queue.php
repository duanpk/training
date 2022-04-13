<?php

namespace Structure\Queue;

class Queue
{
    private $queue;
    private $size;

    public function __construct($queue = [])
    {
        $this->size = count($queue);
        $this->queue = $queue;
    }

    /**
     * Inserts an element at the end of the queue.
     *
     * @param   mixed  $value  The value to insert.
     *
     * @return  void          null
     */
    public function enqueue($value)
    {
        $this->queue[] = $value;
        $this->size++;
    }

    /**
     * Delete the first element of the queue
     *
     * @return  mixed  The first element of the queue
     */
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $this->size--;
        return array_shift($this->queue);
    }

    public function peek()
    {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->queue[0];
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
