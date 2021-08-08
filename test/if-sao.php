<?php
$bool = false;
//if ($bool) {
//    echo 'true'.PHP_EOL;
//}

//骚操作 echo 不能输出bool类型 ,&& 后不能使用echo
//$bool && echo 'true';
$bool &&  var_dump('true');