<?php
function test() {
    $arr = [1, 2, 3];
    $test2 = test2($arr);
    var_dump($test2);
}

function test2(array $arr) {
    foreach ($arr as $key => &$item) {
        $item += 1;
    }
    return $arr;
}

test();