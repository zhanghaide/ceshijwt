<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-04-21
 * Time: 11:18
 */

namespace app\lib\exception;
use think\Exception;
use think\exception\Handle;
use think\Request;
class ExceptionHandle extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
    private $URL;
    //想要修改原来的抛出异常的方法 就要覆盖原来的方法
//    public function  render(Exception $e){
//        //抛出的所有错误都会通过rander方法渲染出来
//        if ($e instanceof BaseException) {
//            //如果类型是BaseValidate的类型 就抛出来  否则其他的错误已其他的形式输出来 BaseValidate也有$code$msg$erroeCode
//            $this->code = $e->code;
//            $this->msg = $e->msg;
//            $this->errorCode = $e->errorCode;
//
//        }else{
//            $this->code = 500;
//            $this->msg = '服务器内部错误';
//            $this->errorCode = 999;
//        }
//        $request = Request::instance();
//        $result = [
//            'msg' =>$this->msg,
//            'errorCode' => $this->errorCode,
//            'request_url' =>$request->url(),
//        ];
//        // function json($data = [], $code = 200, $header = [], $options = [])
//        return json($result,$this->code);
//    }
}