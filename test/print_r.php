<?php
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
class Student{
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @return mixed
     */
    public function setName()
    {
        return $this->name;
    }
}


file_put_contents('./test.log',print_r($a,true).PHP_EOL,FILE_APPEND | LOCK_EX);
file_put_contents('./test.log',print_r(new Student(),true).PHP_EOL,FILE_APPEND | LOCK_EX);
