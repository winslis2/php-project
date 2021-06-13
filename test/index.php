<?php
$title = '111';
$titleEn = 'sss';
if (!$title && $titleEn) {
    $title = $titleEn;
}
//var_dump($title);

$str = mb_substr($title,0,5);
var_dump($str);