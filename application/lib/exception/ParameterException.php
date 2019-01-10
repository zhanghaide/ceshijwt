<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-04-21
 * Time: 10:16
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    /**
     * Class ParameterException
     * 通用参数类异常错误
     */
    public $code = 400;
    public $errorCode = 10000;
    public $msg = "invalid parameters";

}