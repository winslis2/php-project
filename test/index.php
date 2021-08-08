<?php
try {
    $errorMessage[] = [
        'error_id' =>  10010,
        'message' => '请尝试切换运输政策服务或引用在线政策',
        'long' =>  '请尝试切换运输政策服务或引用在线政策'
    ];

  throw new Exception(json_encode($errorMessage));
}catch(Exception $e){
var_dump(json_decode($e->getMessage(),true));
}
