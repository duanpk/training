<?php

namespace Basic\Tree;

require_once 'queue.php';
require_once '../node.php';

use Basic\Queue;


class BinaryTree
{
    protected $root;

    public function __construct(Node $root = null)
    {
        $this->root = $root;
    }

    public function getRoot()
    {
        return $this->root;
    }

    public function setRoot(Node $root)
    {
        $this->root = $root;
    }

    public function hasRoot()
    {
        return $this->root !== null;
    }

    public function traverse($order = 'pre' | 'in' | 'post' | 'level')
    {
        switch ($order) {
            case 'pre':
                $this->preOrder($this->root);
                break;
            case 'in':
                $this->inOrder($this->root);
                break;
            case 'post':
                $this->postOrder($this->root);
                break;
            case 'level':
                $this->levelOrder($this->root);
                break;
        }
    }

    // traverse the bt in pre-order
    private function preOrder($node)
    {
        if ($node !== null) {
            echo $node->getData() . ' ';
            $this->preOrder($node->getLeft());
            $this->preOrder($node->getRight());
        }
    }

    // traverse the bt in in-order
    private function inOrder($node)
    {
        if ($node !== null) {
            $this->inOrder($node->getLeft());
            echo $node->getData() . ' ';
            $this->inOrder($node->getRight());
        }
    }

    // traverse the bt in post-order
    private function postOrder($node)
    {
        if ($node !== null) {
            $this->postOrder($node->getLeft());
            $this->postOrder($node->getRight());
            echo $node->getData() . ' ';
        }
    }

    //traverse the bt in level-order
    public function levelOrder()
    {
        $queue = new Queue();
        $queue->enqueue($this->root);
        while (!$queue->isEmpty()) {
            $node = $queue->dequeue();
            echo $node->getData() . ' ';
            if ($node->hasLeft()) {
                $queue->enqueue($node->getLeft());
            }
            if ($node->hasRight()) {
                $queue->enqueue($node->getRight());
            }
        }
    }

    public function findMin()
    {
        $current = $this->root;
        while ($current->hasLeft()) {
            $current = $current->getLeft();
        }
        return $current->getData();
    }

    public function findMax()
    {
        $current = $this->root;
        while ($current->hasRight()) {
            $current = $current->getRight();
        }
        return $current->getData();
    }
}

$queue=new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
// $queue->