<?php
namespace project\api;
use core\Db;
class Article{
    /**
     * Account::verifyAdminLogin()
     * 后台登录验证接口
     * @param userName 用户名  passWord 密码
     * @return array['status'返回结果代码info返回结果详情]
     */
    public function addArticle(){  
        $res = [];
        $input = input();
         
        $res['status'] = 2;//失败
        $res['info'] = "参数不全";
        
        echo json_encode($res);  
    }
}
?>