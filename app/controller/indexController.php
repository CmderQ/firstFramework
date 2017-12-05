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
use core\index;

class indexController extends index
{
    public function index()
    {
        $data = 'hello nihao';
        $this->assign('data', $data);
        $this->display('index.html');
    }

    public function hello()
    {
        $data = 'test views';
        $this->assign('data', $data);
        $this->display('hello.html');
    }
}
