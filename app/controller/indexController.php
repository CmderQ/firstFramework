<?php
/**
 * Created by PhpStorm.
 * Filename:  index.class.php
 * User:      cmder
 * Date:      2017/11/27
 * Time:      22:47
 */

namespace app\controller;
use core\lib\model;

class indexController  extends \core\index
{
    public function index()
    {
        $data = 'Hello World';
        $this->assign('data', $data);
        $this->display('index.html');
    }
}
