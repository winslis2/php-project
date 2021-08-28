<?php
//检查是否加在某个扩展
var_dump(extension_loaded('swoole1'));
var_dump(get_loaded_extensions());
var_dump(get_extension_funcs('swoole'));

echo swoole_version().PHP_EOL;
