<?php
function down_mp3($url, $data){
// curl下载文件
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$mp3 = curl_exec($ch);
if (curl_errno($ch)) {
echo 'Errno'.curl_error($ch);
}

curl_close($ch);
// 保存文件到指定路径
file_put_contents($data.'/'.basename($url) , $mp3);

unset($mp3);
}
for ($i=25036;$i<=25135;$i++) {
    down_mp3("http://play.zanmeishi.com/song/p/{$i}.mp3",'/Users/lis2/mp3');
}

