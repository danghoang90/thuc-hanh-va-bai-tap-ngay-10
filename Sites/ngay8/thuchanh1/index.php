<?php
include 'ArrayList.php';

$listIntefer = new ArrayList();
$listIntefer->add(7);
$listIntefer->add(9);
$listIntefer->add(9);

echo $listIntefer->get(1);
echo "<br>";

echo $listIntefer->get(-1);