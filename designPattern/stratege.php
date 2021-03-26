<?php
interface Math {
    public function calc($a,$b);
}

class MathAdd implements Math {

    public function calc($a, $b)
    {
        return $a+$b;
    }
}

class MathSub implements Math {

    public function calc($a, $b)
    {
        return $a-$b;
    }
}

class MathMul implements Math {

    public function calc($a, $b)
    {
        return $a*$b;
    }
}

class MathDiv implements Math {

    public function calc($a, $b)
    {

        return $a/$b;
    }
}

class MyMath {
    private $calc = null;
    public function __construct($calc)
    {
        $math = 'Math'.$calc;
        $this->calc =  new $math();
    }
    public function calc($a, $b) {
        return $this->calc->calc($a,$b);
    }
}
$operation = 'Mul';
$myMath = new MyMath($operation);
echo $myMath->calc(2,2);