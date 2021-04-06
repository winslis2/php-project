<?php


namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller
{

    public function index()
    {

        \EasySwoole\EasySwoole\Task\TaskManager::getInstance()->async(function () {

            echo 'async'.PHP_EOL;
            \co::sleep(3);
        }, function ($reply, $taskId, $workerIndex) {
            // $reply 返回的执行结果
            // $taskId 任务id

            echo 'async success'.PHP_EOL;
        });

        echo 'task next code'.PHP_EOL;
//        if (!isset($a)) {
//            $a = 1;
//        }else{
//           $a +=1;
//        }
//        echo $a;
//        \co::sleep(5);
        $file = EASYSWOOLE_ROOT.'/vendor/easyswoole/easyswoole/src/Resource/Http/welcome.html';
        if(!is_file($file)){
            $file = EASYSWOOLE_ROOT.'/src/Resource/Http/welcome.html';
        }
        $this->response()->write('hello world');
//        $this->response()->write(file_get_contents($file));
    }
    function test()
    {
        echo posix_getpid().PHP_EOL;
    }
    function test1() {
        echo posix_getpid().PHP_EOL;
    }

    protected function actionNotFound(?string $action)
    {
        $this->response()->withStatus(404);
        $file = EASYSWOOLE_ROOT.'/vendor/easyswoole/easyswoole/src/Resource/Http/404.html';
        if(!is_file($file)){
            $file = EASYSWOOLE_ROOT.'/src/Resource/Http/404.html';
        }
        $this->response()->write(file_get_contents($file));
    }
}