<?php
namespace project\api;
use core\Db;
class Article{
    /**
     * Article::articleAdd()
     * ������ӽӿ�
     * @param content ����
     * @return array['status'���ؽ������info���ؽ������]
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
                $res['status'] = 1;//��Ч�û���
                $res['info'] = "add success";
            } else {
                $res['status'] = 2;//�ɹ�
                $res['info'] = "add fail";
            }
        } else {
            $res['status'] = 2;//ʧ��
            $res['info'] = "������ȫ";
        }
        echo json_encode($res);  
    }
}
?>