<?php
//后面的数组会覆盖前面的，key使用前面的
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
//第一个的保留，第二个数组选择第一个数组中没有的添加过去
print_r($array1 + $array2);

