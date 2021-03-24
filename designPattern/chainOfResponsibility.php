<?php
class board {
    private $level = 1;
    private $superior = 'admin';
    public function process($level) {
        if ($level <= $this->level) {
            echo '版主删帖';
        }else {
            $superior = new $this->superior;
            $superior->process($level);
        }
    }
}

class admin {
    private $level = 2;
    private $superior = 'police';
    public function process($level) {
        if ($level <= $this->level) {
            echo '封禁账号';
        }else {
            $superior = new $this->superior;
            $superior->process($level);
        }
    }
}

class police {
    private $level = null;
    private $superior = 'admin';
    public function process($level) {
       echo '抓起来ba';
    }
}
$level = 2;
$board = new board();
$board->process($level);
