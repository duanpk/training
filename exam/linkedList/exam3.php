<?php

namespace Structure\LinkedList;

require_once '../../data-structure/linkedList/linkedList.php';

$ll1 = new LinkedList();
$ll1->addLast(1);
$ll1->addLast(1);
$ll1->addLast(1);
$ll1->addLast(1);

$ll2 = new LinkedList();
$ll2->addLast(2);
$ll2->addLast(3);
$ll2->addLast(4);
$ll2->addLast(6);
$ll2->addLast(8);
$ll2->addLast(10);

$cur1 = $ll1->getHead();
$cur2 = $ll2->getHead();

while ($cur2 !== null) {
    if ($cur1 === null) {
        $ll1->addLast($cur2->getData());
        $cur2 = $cur2->getNext();
        continue;
    }
    if ($cur1->getData() >= $cur2->getData()) {
        if ($cur1->getPrev() === null) {
            $ll1->addFirst($cur2->getData());
            $cur2 = $cur2->getNext();
            continue;
        } else {
            $temp = new Node($cur2->getData(), $cur1, $cur1->getPrev());
            $cur1->getPrev()->setNext($temp);
            $cur1->setPrev($temp);
            $cur2 = $cur2->getNext();
        }
    } else {
        $cur1 = $cur1->getNext();
    }
}

$ll1->print();