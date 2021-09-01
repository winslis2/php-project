<?php
//这个$a是全局变量
$a = 1;
function test(){
    //Undefined variable: a，要使用传参，或者全局变量引入
    //和C语言不同
    echo $a;
}
test();
