<?php
function test()
{
    static $a = 1;
    $b = 2;
}
test();
//
echo $a;
echo $b;