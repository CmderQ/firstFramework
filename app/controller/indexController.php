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

class indexController extends \core\index
{
    public function index()
    {
        $data = 'hello nihao';
        $this->assign('data', $data);
        $this->display('index.html');
    }
}
