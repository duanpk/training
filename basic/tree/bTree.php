<?php

namespace Basic\Tree;

use Basic\Queue\Queue;

require_once 'node.php';
require_once __DIR__ . '/../queue/queue.php';

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

    /**
     * traverse the tree
     *
     * @param   string $order  'pre' or 'post' or 'in' or 'level'
     * @param   pre    method        pre-order
     * @param   in     method        in-order
     * @param   post   method        post-order
     * @param   level  method        level-order
     *
     * @return  void         null
     */
    public function traverse($order = 'pre' | 'in' | 'post')
    {
        switch ($order) {
            case 'pre':
                $this->preOrder($this->getRoot());
                break;
            case 'in':
                $this->inOrder($this->getRoot());
                break;
            case 'post':
                $this->postOrder($this->getRoot());
                break;
        }
    }

    /**
     * traverse the tree in pre-order
     *
     * @param   Node  $node  the root node
     *
     * @return  void         null
     */
    private function preOrder(Node $node = null)
    {
        if ($node !== null) {
            echo $node->getData() . ' ';
            $this->preOrder($node->getLeft());
            $this->preOrder($node->getRight());
        }
    }

    /**
     * traverse the tree in in-order
     *
     * @param   Node  $node  the root node
     *
     * @return  void         null
     */
    private function inOrder(Node $node = null)
    {
        if ($node !== null) {
            $this->inOrder($node->getLeft());
            echo $node->getData() . ' ';
            $this->inOrder($node->getRight());
        }
    }

    /**
     * traverse the tree in post-order
     *
     * @param   Node  $node  the root node
     *
     * @return  void         null
     */
    private function postOrder(Node $node = null)
    {
        if ($node !== null) {
            $this->postOrder($node->getLeft());
            $this->postOrder($node->getRight());
            echo $node->getData() . ' ';
        }
    }

    public function insert($data)
    {
        $node = new Node($data);

        $this->hasRoot()
            ? $this->insertNode($this->getRoot(), $node)
            : $this->setRoot($node);
    }

    private function insertNode(Node $node, Node $newNode)
    {
        $queue = new Queue([$node]);
        while (true) {
            $current = $queue->dequeue();

            if ($current->hasLeft()) {
                $queue->enqueue($current->getLeft());
            } else {
                $current->setLeft($newNode);
                break;
            }

            if ($current->hasRight()) {
                $queue->enqueue($current->getRight());
            } else {
                $current->setRight($newNode);
                break;
            }
        }
    }
}
