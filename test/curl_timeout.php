<?php
// 使用谷歌官网的81端口来模拟连接超时
$url = 'https://www.google.com:81';
//$url = 'https://www.baidu.com';

// 第一种情况：仅设置CURLOPT_TIMEOUT
//$options = [
//    CURLOPT_URL => $url,
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_HEADER => false,
//    CURLOPT_TIMEOUT => 3,
//];
//$ch = curl_init();
//curl_setopt_array($ch, $options);
//$content = curl_exec($ch);
//$time = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
//curl_close($ch);
//echo $time.PHP_EOL; // 输出 2.958352
//
//// 第二种情况：仅设置CURLOPT_CONNECTTIMEOUT
//$options = [
//    CURLOPT_URL => $url,
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_HEADER => false,
//    CURLOPT_CONNECTTIMEOUT => 1,
//];
//$ch = curl_init();
//curl_setopt_array($ch, $options);
//$content = curl_exec($ch);
//$time = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
//curl_close($ch);
//echo $time.PHP_EOL; // 输出 0.989237

// 第三种情况：同时设置CURLOPT_TIMEOUT和CURLOPT_CONNECTTIMEOUT
$options = [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => false,
    CURLOPT_CONNECTTIMEOUT => 6,
    CURLOPT_TIMEOUT => 6,
];
$ch = curl_init();
curl_setopt_array($ch, $options);
try {
    $content = curl_exec($ch);
}catch (Exception $exception) {
    var_dump($exception->getMessage());
}
$errno = curl_errno($ch);
$error = curl_error($ch);
var_dump($errno);
var_dump($error);
$time = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
curl_close($ch);
echo $time.PHP_EOL; //