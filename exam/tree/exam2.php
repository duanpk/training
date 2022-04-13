<?php

namespace Structure\Tree;

require_once '../../data-structure/tree/bTree.php';

// three leaves
$left1 = new Node(4);
$left2 = new Node(9);
$left3 = new Node(15);
// parent nodes
$parent1 = new Node(5, $left1); //its child is 5 (left child)
$parent2 = new Node(7, right: $left2); //its child is 9 (right child)
$parent3 = new Node(10, $parent2, $left3); //its children are 7(left) and 15 (right)
//root
$root = new Node(6, $parent1, $parent3); //root node
//tree
$bt = new BinaryTree($root);

$bt->insert(12);

$bt->traverse('pre');
