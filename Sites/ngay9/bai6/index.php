<?php
include_once 'Queue.php';
include_once 'Stack.php';


$string = 'She is beautiful girl';
$str = str_split($string);
$count = count($str);
echo "<pre>";
print_r($str);

$objStack = new Stack($count);

$objQueue = new Queue($count);


foreach ($str as $key => $value) {
    $objStack->push($value);
    $objQueue->enqueue($value);
}
echo "<pre>";
var_dump($objStack->stack);
var_dump($objQueue->queue);

function compareStackQueue($objStack,  $objQueue)
{

    global $count;

    for ($i = 0; $i < $count; $i++) {

        if ($objStack->stack[$i] == $objQueue->queue[$i]) {

            return  true;
        } else {
            return  false;
            break;
        }
    }
}
if (compareStackQueue($objStack, $objQueue) == true) {
    echo "Chuỗi $string này là chuỗi đối xứng";
} else {
    echo "Chuỗi $string này không đối xứng";
}
