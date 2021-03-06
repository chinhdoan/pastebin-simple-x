<?php
namespace App\Validator;

/**
 * 静态检查帮助类, 只能检查格式. 不要在这里对 Domain / Model 层进行访问.
 * 
 * 此类为实验性类, 可能会最后归并入 Domain 层
 * 
 * @author ZhangZijing <i@pluvet.com> 2019-5-15
 */
class StaticValidator
{
    /**
     * 检查邮箱格式是否正确
     *
     * @param string $mailAddress 邮箱地址
     * @return bool 正确返回true
     */
    public static function checkEmailFormat(string $email)
    {
        return preg_match('/^[_a-z0-9-\.]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email);
    }
    /**
     * 检查用户名格式是否正确. 不能以@开头, 可以含有?.@_所有中英文和emoji.
     *
     * @param string $username
     * @return bool 正确返回true
     */
    public static function checkUsernameFormat(string $username)
    {
        return preg_match('/^(?!@)[?.@\-a-zA-Z0-9_\x4e00-\x9fa5\xD83C-\xDBFF\xDC00-\xDFFF]+$/i', $username);
    }

    // TODO: 敏感词检查
    public static function checkSensitiveWords(string $text)
    {
        # code...
    }

    public static function checkGeneralName(string $name){        
        return preg_match('/[\w\x{4e00}-\x{9fa5}]/u', $name);
    }
}