<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-04-21
 * Time: 09:35
 */

namespace app\api\validate;
use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    /**
     * 检测所有客户端发来的参数是否符合验证类规则
     * 基类定义了很多自定义验证方法
     * 这些自定义验证方法其实，也可以直接调用
     * @throws ParameterException
     * @return true
     */
    public function goCheck(){
        //必须设置contetn-type:application/json  接收参数
        $params = Request::instance()->param();//接收所有参数
        if (!$this->check($params)) {
            $exception = new ParameterException([
                'msg' => is_array($this->error) ? implode(
                    ';', $this->error) : $this->error,
            ]);
            throw $exception;  //验证错误的抛出   是有统一的parameterException抛出的
        }
        return true;
    }
    protected function  idmustzhengzhengshu($value){
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }
        return $value . '必须是正整数';
    }
}