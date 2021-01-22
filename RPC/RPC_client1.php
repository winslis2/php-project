<?php
class RPC_client1{
    private $socket = null;
    public function __construct(string $add, int $port)
    {
        $this->socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
        if (! $this->socket ) {
            die('socket_create()执行失败'.socket_strerror(socket_last_error()));
        }
        if (!socket_connect( $this->socket , $add, $port)) {
            die('socket_connect()执行失败'.socket_strerror(socket_last_error()));
        }else{
            echo 'OK'.PHP_EOL;
        }
        $data = ['class'=>'Deal','method'=>'add','params'=>[8,2]];
        socket_write( $this->socket ,json_encode($data));
        $msg = socket_read($this->socket,1024);
        echo $msg.PHP_EOL;
    }
    public function __destruct()
    {
        socket_close($this->socket);
    }
}
new RPC_client1('127.0.0.1','13130');