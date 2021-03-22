<?php
interface  db{
    function conn();
}
class Mysql implements db{
    function conn()
    {
       echo '连接上mysql';
    }
}

class Sqlite implements db{
    function conn()
    {
        echo '连接上Sqlite';
    }
}
class Factory {
    public static function getConnection(string $type) {
        if ($type == 'mysql') {
            return new Mysql();
        }elseif ($type == 'sqlite') {
            return new Sqlite();
        }else{
            throw new Exception("error db type");
        }
     }
}

$factory = new Factory();
$sql = $factory::getConnection('mysql1');
$sql->conn();
