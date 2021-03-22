<?php

interface  db
{
    function conn();
}

interface factory
{
    function createDb();
}

class Mysql implements db
{
    function conn()
    {
        echo '连接上mysql';
    }
}

class Sqlite implements db
{
    function conn()
    {
        echo '连接上Sqlite';
    }
}

class mysqlFactory implements factory
{

    function createDb()
    {
        return new Mysql();
    }
}

class sqliteFactory implements factory
{

    function createDb()
    {
        return new Sqlite();
    }
}


$factory = new mysqlFactory();
$mysql = $factory->createDb();
$mysql->conn();

