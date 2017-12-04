<?php
/**
 * Created by PhpStorm.
 * Filename:  ceshiModel.php
 * User:      cmder
 * Date:      2017/12/4
 * Time:      23:20
 */

namespace app\model;

use core\lib\model;

class  ceshiModel extends model
{
    public $table = "ceshi";

    public function queryList()
    {
        return $this->select($this->table, "*");
    }

    public function findItem($id)
    {
       return  $this->get($this->table, '*', array(
            'idx' => $id
        ));
    }
}