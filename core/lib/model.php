<?php
/**
 * Created by PhpStorm.
 * Filename:  model.php
 * User:      cmder
 * Date:      2017/11/27
 * Time:      23:26
 */

namespace core\lib;
use core\lib\conf;

class model extends  \Medoo\medoo
{
    public function __construct()
    {
       $option = conf::all("database") ;
       parent::__construct($option);
    }
}