<?php

//把对象当作函数调用的时候会触发invoke函数
class Test{
    function __invoke(int $num)
    {
        echo $num;
    }
}
$test = new Test();
$test(1);