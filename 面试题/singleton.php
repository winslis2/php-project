<?php
class Singleton {
    private static $instance = null;
    private function __construct()
    {
        return;
    }
    private function __clone() {
        echo 'clone is not allowed';
    }

    public static function getInstance() {
        if (self::$instance) {
            return new self();
        }else{
            return self::$instance;
        }
    }
}
$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
var_dump($singleton===$singleton2);
