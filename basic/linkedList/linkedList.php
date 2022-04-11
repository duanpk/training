<?php

namespace Basic\LinkedList;

require_once 'node.php';

class LinkedList
{
    private $head;
    private $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function isEmpty()
    {
        return $this->head === null;
    }

    public function addFirst($data)
    {
        $node = new Node($data);
        if ($this->head === null) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            $node->setNext($this->head);
            $this->head->setPrev($node);
            $this->head = $node;
        }
    }

    public function addLast($data)
    {
        $node = new Node($data);
        if ($this->tail === null) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            $node->setPrev($this->tail);
            $this->tail->setNext($node);
            $this->tail = $node;
        }
    }

    public function delElement($data, $all = false)
    {
        $current = $this->head;
        while ($current !== null) {
            if ($current->getData() === $data) {
                if ($current === $this->head) {
                    $this->head = $current->getNext();
                    $this->head->setPrev(null);
                } elseif ($current === $this->tail) {
                    $this->tail = $current->getPrev();
                    if ($this->tail !== null) {
                        $this->tail->setNext(null);
                    }
                } else {
                    $current->getPrev()->setNext($current->getNext());
                    $current->getNext()->setPrev($current->getPrev());
                }
                if ($all === false) {
                    return;
                }
            }
            $current = $current->getNext();
        }
    }

    public function print()
    {
        $current = $this->head;
        while ($current !== null) {
            echo $current->getData() . " ";
            $current = $current->getNext();
        }
    }

    public function printReverse()
    {
        $current = $this->tail;
        while ($current !== null) {
            echo $current->getData() . " ";
            $current = $current->getPrev();
        }
    }

    public function getHead()
    {
        return $this->head;
    }

    public function getTail()
    {
        return $this->tail;
    }
}
