<?php
/**
 * Created by PhpStorm.
 * Filename:  guestbookModel.php
 * User:      cmder
 * Date:      2017/12/6
 * Time:      22:58
 */

namespace app\model;

use core\lib\model;

class  guestbookModel extends model
{
    public $table = "guestbook";

    public function all()
    {
        return $this->select($this->table, '*');
    }

    public function addOne($data)
    {
        $data['creatime'] = date('Y-m-d H:i:s');
        return $this->insert($this->table, $data);
    }

    public function delOne($id)
    {
       $ret =   $this->delete($this->table, array(
            'id' => $id
        ));

       if($ret !== false){
           return true;
       }

       return false;
    }
}