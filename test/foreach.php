<?php
$arr = [1, 2, 3];
foreach ($arr as $key => &$item) {
    $item += 1;
}

var_dump($arr);