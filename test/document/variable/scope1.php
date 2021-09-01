<?php
$a = 1;
$b = 2;
function Sum()
{
    //在函数中声明全局变量后就可以在全局使用
    //不是只有在全局声明为全局变量才可以
    global $a,$b;
    $b = $a + $b;
}

Sum();
echo $b;