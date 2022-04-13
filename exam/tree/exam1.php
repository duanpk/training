<?php

namespace Structure\Tree;

require_once '../../data-structure/tree/bsTree.php';

$bst = new BinarySearchTree();

$bst->insert(10);
$bst->insert(17);
$bst->insert(19);
$bst->insert(6);
$bst->insert(1);
$bst->insert(5);

echo $bst->search(0) ? 'true' : 'false' . "\n";
echo $bst->findMax() . PHP_EOL;
echo $bst->findMin() . PHP_EOL;
