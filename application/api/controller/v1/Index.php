<?php
namespace app\api\controller\v1;

use app\api\validate\Idmustzhengzhengshu;

class Index extends CommonController
{
    public function index($id)
    {
        (new Idmustzhengzhengshu())->goCheck();

    //        $msg = 1;
    //        $this->assign('msg',$msg);
        return $this->fetch();
    }
}
