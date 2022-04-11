<?php

namespace Basic\Tree;

require_once 'bTree.php';

class BinarySearchTree extends BinaryTree
{
    public function insert($data)
    {
        $node = new Node($data);
        if ($this->root === null) {
            $this->root = $node;
        } else {
            $this->insertNode($this->root, $node);
        }
    }

    private function insertNode($node, $newNode)
    {
        if ($newNode->getData() < $node->getData()) {
            if (!$node->hasLeft()) {
                $node->setLeft($newNode);
            } else {
                $this->insertNode($node->getLeft(), $newNode);
            }
        } else {
            if (!$node->hasRight()) {
                $node->setRight($newNode);
            } else {
                $this->insertNode($node->getRight(), $newNode);
            }
        }
    }

    public function search($data)
    {
        return $this->searchNode($this->root, $data);
    }

    private function searchNode($node, $data)
    {
        if ($node === null) {
            return false;
        }
        if ($node->getData() === $data) {
            return true;
        }
        if ($data < $node->getData()) {
            return $this->searchNode($node->getLeft(), $data);
        } else {
            return $this->searchNode($node->getRight(), $data);
        }
    }

    public function delete($data)
    {
        $this->root = $this->deleteNode($this->root, $data);
    }

    private function deleteNode($node, $data)
    {
        // if ($node === null) {
        //     return null;
        // }
        // if ($data < $node->getData()) {
        //     $node->setLeft($this->deleteNode($node->getLeft(), $data));
        // } elseif ($data > $node->getData()) {
        //     $node->setRight($this->deleteNode($node->getRight(), $data));
        // } else {
        //     if (!$node->hasLeft() && !$node->hasRight()) {
        //         $node = null;
        //     } elseif (!$node->hasLeft()) {
        //         $node = $node->getRight();
        //     } elseif (!$node->hasRight()) {
        //         $node = $node->getLeft();
        //     } else {
                
        //     }
        // }
    }
}
