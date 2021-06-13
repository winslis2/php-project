<?php
$res = [];
$wg = new \Co\WaitGroup();
for ($i=0;$i<10;$i++) {
    go(function ()use ($res,$i,$wg){
        $wg->add();
        try {
            $name = 'liu';
            if ($i%2==0) {
                throw new Exception('11111');
            }
            $res[] = $name;
        }catch (Exception $exception) {
            $res[] = 'catch';
        }
        $wg->done();
    });
}
$wg->wait();
var_dump($res);


