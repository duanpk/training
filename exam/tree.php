<?php

require_once '../basic/tree/bsTree.php';

use Basic\Tree\BinarySearchTree;
use Basic\Tree\BinaryTree;
use Basic\Tree\Node;

$left1 = new Node(4);
$left2 = new Node(9);
$left3 = new Node(15);

$parent1 = new Node(2, $left1);
$parent2 = new Node(7, right: $left2);
$parent3 = new Node(10, $parent2, $left3);

$root = new Node(1, $parent1, $parent3);

$bt = new BinaryTree($root);

// $bt->traverse('pre');

$root = new Node(10);
$bst = new BinarySearchTree($root);
$bst->insert(5);
$bst->insert(19);
$bst->insert(6);
$bst->insert(1);
$bst->insert(27);

$bst->traverse('level');