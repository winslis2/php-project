<?php

class B
{
}

class C
{
}

class D
{
}

class Ioc
{
    public $objs = [];
    public $containers = [];

    public function __construct()
    {
        $this->objs['b'] = function () {
            //如果只new IOC对象不运行bind方法不会 new B 对象的
            return new B();
        };
        $this->objs['c'] = function () {
            return new C();
        };
        $this->objs['d'] = function () {
            return new D();
        };
    }

    public function bind($name)
    {
        if (!isset($this->containers[$name])) {
            if (isset($this->objs[$name])) {
                $this->containers[$name] = $this->objs[$name]();
            } else{
                return null;
            }
        }

        return $this->containers[$name];
    }

}

$ioc = new Ioc();
//$bClass = $ioc->bind('b');
//$cClass = $ioc->bind('c');
//$dClass = $ioc->bind('d');
//$eClass = $ioc->bind('e');
//
//var_dump($bClass); // B
//var_dump($cClass); // C
//var_dump($dClass); // D
//var_dump($eClass); // NULL

