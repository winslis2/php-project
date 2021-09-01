<?php
$arr = [
    'name' => 'lis2',
    'age' => 12,
];

$serializeString =  serialize($arr);
echo $serializeString;
$unserializeString = unserialize($serializeString);
var_dump($unserializeString);