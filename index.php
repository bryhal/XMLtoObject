<?php

include './XMLtoObject.php';

echo '<pre>';

//$xml_file = 'test1.xml';
$xml_file = 'test2.xml';

$xml = new XMLtoObject();

$xml->parseFile($xml_file);

$result = $xml->getTree();

unset($xml);

//print_r($result);

// for test2.xml
$foods = $result->breakfast_menu->food;

foreach ($foods as $food){
    
    echo $food->name->value.'<br />';
    
}


echo '</pre>';
?>
