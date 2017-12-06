<?php
/**
 * Created by PhpStorm.
 * Filename:  index.class.php
 * User:      cmder
 * Date:      2017/11/27
 * Time:      22:47
 */

namespace app\controller;

use app\model\ceshiModel;
use app\model\guestbookModel;
use core\index;

class indexController extends index
{
    //所有留言
    public function index()
    {
        $guestbook = new guestbookModel();
        $data = $guestbook->all();
        $this->assign('data', $data);
        $this->display('index.html');
    }

    //添加留言
    public function add()
    {

        $this->display('add.html');
    }

    //保存留言
    public function save()
    {
        $data['title'] = post('title');
        $data['content'] = post('content');

        $guestbook = new guestbookModel();
        $result = $guestbook->addOne($data);
        if ($result) {
            jump('/index/index');
        }

        op('留言失败');
    }

    //删除留言
    public function del()
    {
        $id = get('id', 0, 'int');
        if ($id) {
            $model = new guestbookModel();
            $retInfo = $model->delOne($id);
            if ($retInfo) {
                jump('/index/index');
            }
            op('删除失败');
        }
        exit('参数错误');
    }
}
