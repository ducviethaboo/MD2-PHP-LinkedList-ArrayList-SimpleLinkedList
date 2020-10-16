<?php
include_once 'node.php';
include_once 'LinkListt.php';

$node1 = new LinkList();
$node1->insertFisrt(10);
$node1->insertFisrt(15);
$node1->insertFisrt(20);
$node1->insertFisrt(25);
$node1->insertFisrt(35);
$node1->insertLast(35);
echo $node1->totalNode();