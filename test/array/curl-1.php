<?php
function curl_string ($url,$user_agent,$proxy){

$ch = curl_init();
curl_setopt ($ch, CURLOPT_PROXY, $proxy);
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent);
//curl_setopt ($ch, CURLOPT_COOKIEJAR, "c:\cookie.txt");
curl_setopt ($ch, CURLOPT_HEADER, 1);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_TIMEOUT, 120);
$result = curl_exec ($ch);
curl_close($ch);
return $result;

}

$url_page = "http://cip.cc";
$user_agent = "Mozilla/4.0";
$proxy = "listing-proxy.ecgtool.com:808";
$string = curl_string($url_page,$user_agent,$proxy);
echo $string;
