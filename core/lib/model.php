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

class model extends \PDO
{
    public function __construct()
    {
        $database = conf::all('database');
        try {
            parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWD']);
        } catch (\PDOException $e) {
            op($e->getMessage());
        }
    }
}