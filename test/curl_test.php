<?php
$proxyUrl = 'out-proxy.ecgtool.com';
$headers = [
    'application'=>'json'
];
$requestBody = [];
$connection = curl_init();
//        dump($param);

$serverUrl = 'https://api.ebay.com';
//set the server we are using (could be Sandbox or Production server)
curl_setopt ( $connection, CURLOPT_URL, $serverUrl );

curl_setopt ( $connection, CURLOPT_PROXY, $proxyUrl);
curl_setopt ( $connection, CURLOPT_PROXYPORT, "808");
//     Common_ApiProcess::log("请求地址:".$this->serverUrl);
//stop CURL from verifying the peer's certificate
curl_setopt($connection, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($connection, CURLOPT_SSL_VERIFYHOST, 0);

//set method as POST
// set the headers using the array of headers
curl_setopt($connection, CURLOPT_HTTPHEADER, $headers );
curl_setopt($connection, CURLOPT_POST, 1);

//set the XML body of the request
curl_setopt($connection, CURLOPT_POSTFIELDS, $requestBody);

//set it to return the transfer as a string from curl_exec
curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($connection, CURLOPT_TIMEOUT,10);
curl_setopt($connection, CURLOPT_CONNECTTIMEOUT,10);
$res = curl_exec($connection);
var_dump($res);