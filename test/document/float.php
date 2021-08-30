<?php
//向下取整
echo intval(1.2).PHP_EOL;
// 7.9999999999999991118   结果为7

echo floor((0.7+0.1)*10).PHP_EOL;

//永远不要比较两个浮点值是否相等
//可以使用下面的方式
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if(abs($a-$b) < $epsilon) {
    echo "true".PHP_EOL;
}