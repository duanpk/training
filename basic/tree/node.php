<?php

namespace Basic\Tree;

class Node
{
    private $data, $left, $right;

    public function __construct($data, Node $left = null, Node $right = null)
    {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function setLeft(Node $left)
    {
        $this->left = $left;
    }

    public function getRight()
    {
        return $this->right;
    }

    public function setRight(Node $right)
    {
        $this->right = $right;
    }

    public function hasLeft()
    {
        return $this->left != null;
    }

    public function hasRight()
    {
        return $this->right != null;
    }
}
