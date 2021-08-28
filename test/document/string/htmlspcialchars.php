<?php
//正确解析
//https://blog.csdn.net/zhuizhuziwo/article/details/50623014
//https://www.thesauruslex.com/typo/eng/enghtml.htm
$string = 'ð';
$string1 = '<div>hello world</div>';
$formatedString =  htmlspecialchars($string);
//
echo $formatedString.PHP_EOL;
echo htmlentities($string).PHP_EOL;

exit(1);
echo htmlspecialchars_decode($formatedString);