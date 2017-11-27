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

class indexController
{
    public function index()
    {
        $model = new model();
        $sql = "SELECT * FROM ceshi";
        $result = $model->query($sql);
        op($result->fetchAll());
    }
}
