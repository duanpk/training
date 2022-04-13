<?php

namespace Structure\Tree;

require_once 'bTree.php';

class BinarySearchTree extends BinaryTree
{
    public function insert($data)
    {
        $node = new Node($data);

        $this->hasRoot()
            ? $this->insertNode($this->getRoot(), $node)
            : $this->setRoot($node);
    }

    private function insertNode(Node $node, Node $newNode)
    {
        if ($newNode->getData() < $node->getData()) {
            $node->hasLeft()
                ? $this->insertNode($node->getLeft(), $newNode)
                : $node->setLeft($newNode);
        } else {
            $node->hasRight()
                ? $this->insertNode($node->getRight(), $newNode)
                : $node->setRight($newNode);
        }
    }

    public function search($data)
    {
        return $this->hasRoot()
            ? $this->searchNode($this->getRoot(), $data)
            : false;
    }

    private function searchNode(Node $node, $data)
    {
        if ($data < $node->getData()) {
            return $node->hasLeft()
                ? $this->searchNode($node->getLeft(), $data)
                : false;
        }

        if ($data > $node->getData()) {
            return $node->hasRight()
                ? $this->searchNode($node->getRight(), $data)
                : false;
        }

        return true;
    }

    public function findMin()
    {
        $current = $this->getRoot();
        while ($current->hasLeft()) {
            $current = $current->getLeft();
        }
        return $current->getData();
    }

    public function findMax()
    {
        $current = $this->getRoot();
        while ($current->hasRight()) {
            $current = $current->getRight();
        }
        return $current->getData();
    }
}
