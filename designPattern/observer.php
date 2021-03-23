<?php
class User implements SplSubject {
    public $name;
    public $email;
    public $tel;
    //当前主题的观察者集合
    private $observers = [];

    public function register($name, $email, $tel) {
        $this->name = $name;
        $this->email = $email;
        $this->tel = $tel;
        $this->notify();
    }
    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer)
    {
        array_push($this->observers, $observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        $key = array_search($observer,$this->observers);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    /**
     * @inheritDoc
     */
    public function notify()
    {
        if (!empty($this->observers)){
            foreach ($this->observers as $observer) {
                $observer->update($this);
            }
        }
    }
}

class EmailObserver implements SplObserver {

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
       echo 'send email to '.$subject->email.' success'.PHP_EOL;
    }
}

class TelObserver implements SplObserver {

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
        echo 'send msg to '.$subject->tel.' success'.PHP_EOL;
    }
}

$user = new User();
$emailObserver = new EmailObserver();
$user->attach($emailObserver);
$telObserver = new TelObserver();
$user->attach($telObserver);
$user->register('lis2','xxxx@qq.com','13200000');