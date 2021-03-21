<?php

$arr = [33, 24, 8, 21, 2, 23, 3, 32, 16];

function quickSort($arr)
{
    if (count($arr)<2) {
        return $arr;
    }
    $mid = $arr[0];
    $left = $right = [];
    //从1开始的
    for ($i=1;$i<count($arr);$i++) {
        if ($mid<$arr[$i]) {
            $right[] = $arr[$i];
        } else {
            $left[] = $arr[$i];
        }
    }
    $left = quickSort($left);
    $right = quickSort($right);
    return array_merge($left, array($mid), $right);
}

print_r(quickSort($arr));
