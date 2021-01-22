<?php
$str = "123abc";
preg_match("/[0-9]+abc/",$str,$match);

$str1 = "000012345666";
//var_dump($match);//123abc

preg_match("/[0-9][1-9]+/",$str1,$match1);
//var_dump($match1);//012345666  这个地方有三个零是没有匹配到的

//匹配0-99之间的数  /[1-9][0-9]?/
$str2 = "01234";
preg_match_all("/[0-9]{1,2}/",$str2,$match2);
//var_dump($match2); // 01  23 4