<?php


namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;
use App\Utility\VerifyCodeTools;
use EasySwoole\Http\Message\Status;
use EasySwoole\Utility\Random;
use EasySwoole\VerifyCode\Conf;


class VerifyCode extends Controller
{
    static $VERIFY_CODE_TTL = 120;
    static $VERIFY_CODE_LENGTH = 4;

    // 生成验证码
    public function verifyCode()
    {
        // 配置验证码
        $config = new Conf();
        $code = new \EasySwoole\VerifyCode\VerifyCode($config);

        // 获取随机数(即验证码的具体值)
        $random = Random::character(self::$VERIFY_CODE_LENGTH, '1234567890abcdefghijklmnopqrstuvwxyz');
        // var_dump($random);    string(4) "m02t"

        // 绘制验证码
        $code = $code->DrawCode($random);

        // 获取验证码的 base64 编码及设置验证码有效时间
        $time = time();
        $result = [
            'verifyCode' => $code->getImageBase64(), // 得到绘制验证码的 base64 编码字符串
            'verifyCodeTime' => $time,
        ];

        // 将验证码加密存储在 Cookie 中，方便进行后续验证。用户也可以把验证码保存在 Session 或者 Redis中，方便后续验证。
        $this->response()->setCookie("verifyCodeHash", VerifyCodeTools::getVerifyCodeHash($random, $time), $time + self::$VERIFY_CODE_TTL, '/');
        $this->response()->setCookie('verifyCodeTime', $time, $time + self::$VERIFY_CODE_TTL, '/');
        $this->writeJson(Status::CODE_OK, $result, 'success');
    }

    // 校验验证码
    public function checkVerifyCode()
    {
        $code = $this->request()->getRequestParam('code');
        $verifyCodeHash = $this->request()->getRequestParam('verifyCodeHash');
        $verifyCodeTime = $this->request()->getRequestParam('verifyCodeTime');
        if (!VerifyCodeTools::checkVerifyCode($code, $verifyCodeTime, $verifyCodeHash)) {
            $this->writeJson(Status::CODE_OK, '验证码错误!', []);
            return false;
        }
        $this->writeJson(Status::CODE_OK, '验证码正确!', []);
    }
}