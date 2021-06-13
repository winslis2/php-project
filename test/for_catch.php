<?php
try {
    for ($i=0;$i<10;$i++) {
        var_dump($i);

    }
}catch (Exception $exception){
    var_dump($exception->getMessage());
}
