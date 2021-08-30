<?php
$string = 'hello';
//字符串的长度使用strlen或mb_strlen  不能使用count，count是用于数组或Countable对象的
echo  strlen($string);