<?php
class Test{
    public function __construct()
    {
    }

    static function test()
    {
        echo __CLASS__.PHP_EOL;
        //静态方法输出Test::test   非静态方法输出test
        echo __METHOD__;
    }
}

Test::test();