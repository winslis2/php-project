<?php
/**
 * User: luffyQAQ
 * Date: 2019/9/5 15:29
 * Email: <1769360227@qq.com>
 */

namespace App\Utility;

class VerifyCodeTools
{
    const DURATION = 5 * 60;

    // 校验验证码
    public static function checkVerifyCode($code, $time, $hash)
    {
        if ($time + self::DURATION < time()) {
            return false;
        }
        $code = strtolower($code);
        return self::getVerifyCodeHash($code, $time) == $hash;
    }

    // 生成验证码 hash 字符串
    public static function getVerifyCodeHash($code, $time)
    {
        return md5($code . $time);
    }
}