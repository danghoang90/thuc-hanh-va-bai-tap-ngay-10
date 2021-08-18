<?php
include_once ('LinkedList.php');

$linkedList = new LinkedList();

$linkedList->addFirst(55);
$linkedList->addFirst(66);
$linkedList->addLast(77);
$linkedList->addLast(99);
$linkedList->dell(1);
$linkedList->delFirst();
$linkedList->add(44,1);

//$linkedList->add(11,0);

$linkData = $linkedList->readList();
echo "<br>";
echo implode ('-' , $linkData);
echo "<br>";
$totalNodes = $linkedList->size();
echo $totalNodes;



//
//$linkedList->delFirst();
//echo implode ('-' , $linkData);
//echo "<br>";
//echo $totalNodes;

