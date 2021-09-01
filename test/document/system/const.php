<?php
$a = 'hello';
try{
    define('aa',1);
    //const不能在try catch 或者if中使用
    const NAME = 'lis2';

}catch(Exception $e) {

}
echo NAME;