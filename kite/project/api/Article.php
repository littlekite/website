<?php
namespace project\api;
use core\Db;
class Article{
    /**
     * Article::articleAdd()
     * 文章添加接口
     * @param content 内容
     * @return array['status'返回结果代码info返回结果详情]
     */
    public function articleAdd(){  
        $res = [];
        $input = input();
        if (!empty($input['content'])) {
            $title = "default";
            $content = $input['content'];
            $author = "admin";
            $add_date = date('Y-m-d H:i:s', time());
            $res_insert = Db::execute("INSERT INTO `k_article` (`title`, `add_date`, `content`, `author`) VALUES ('$title', '$add_date', '$content', '$author')");
            if (!empty($res_insert)) {
                $res['status'] = 1;//有效用户名
                $res['info'] = "add success";
            } else {
                $res['status'] = 2;//成功
                $res['info'] = "add fail";
            }
        } else {
            $res['status'] = 2;//失败
            $res['info'] = "参数不全";
        }
        echo json_encode($res);  
    }
}
?>