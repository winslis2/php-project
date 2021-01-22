<?php
class RPC_server{
    private $socket = null;
//    private string $add;
//    private string $port;
    public function __construct(string $add, int $port)
    {
        if (!extension_loaded('sockets')) {
            die('sockets 扩展没有打开');
        }
        $this->socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
        if (!$this->socket) {
            die('socket_create()执行失败'.socket_strerror(socket_last_error()));
        }
        //设置端口重用
        if (!socket_set_option($this->socket, SOL_SOCKET, SO_REUSEADDR, 1)) {
            die('socket_set_option()执行失败'.socket_strerror(socket_last_error()));
        }
        if (!socket_bind($this->socket, $add,$port)){
            die('socket_bind()执行失败'.socket_strerror(socket_last_error()));

        };
        if (!socket_listen($this->socket,0)) {
            die('socket_listen()执行失败'.socket_strerror(socket_last_error()));

        }
        while (true) {
           $client = socket_accept($this->socket);
           if ($client) {
               $buff = socket_read($client,1024);
               $data = json_decode($buff,true);
               $class = $data['class'];
               $method = $data['method'];
               $params = $data['params'];
               include_once $class.'.php';
               $refObj = new ReflectionClass($class);
               $refMethod = $refObj->getMethod($method);
               $data = $refMethod->invokeArgs($refObj->newInstance(),$params);
               socket_write($client,$data);
           }
        }
    }

    public function __destruct()
    {
        socket_close($this->socket);
    }
}
new RPC_server('127.0.0.1','13130');