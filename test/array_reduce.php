<?php
//array_reduce迭代处理返回的是字符串
function add(int $a,int $b) {
    return $a + $b;
}
$arr = [1, 2 ,3];
$result = array_reduce($arr,function(int $a,int $b) {
    return $a + $b;
},0);
echo $result.PHP_EOL;


//array_map返回的是一个数组
function fn1($a) {
    return $a+1;
}
$arrayMapResult = array_map('fn1',$arr);
var_dump($arrayMapResult);