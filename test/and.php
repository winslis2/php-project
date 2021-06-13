<?php
//$bA = true;
//$bB = false;
//$b1 = $bA and $bB;
//var_dump( $bA and $bB);
////$b2 = $bA && $bB;
//var_dump($b1); // $b1 = true
$rsBody['msg'] = '1';
!empty($rsBody['msg']) and $rsBody['msg']='and';
var_dump($rsBody);