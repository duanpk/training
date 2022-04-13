<?php

namespace Structure\LinkedList;

require_once '../../data-structure/linkedList/linkedList.php';

$linkedList = new LinkedList();
$linkedList->addLast(1);
$linkedList->addLast(2);
$linkedList->addLast(3);
$linkedList->addLast(4);
$linkedList->addLast(1);
$linkedList->addLast(1);
$linkedList->addLast(1);

$linkedList->delElement(1, true);
$linkedList->print();
