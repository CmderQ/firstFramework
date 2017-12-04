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
        //测试模型类
        $model = new ceshiModel();
       dump( $model->findItem(3));
    }
}
