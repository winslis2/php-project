<?php
$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as &$color) {
    $color =  strtoupper($color);
}
/* 确保后面对
$color 的写入不会修改最后一个数组元素 */
unset($color);

var_dump($colors);