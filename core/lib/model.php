<?php
/**
 * Created by PhpStorm.
 * Filename:  model.php
 * User:      cmder
 * Date:      2017/11/27
 * Time:      23:26
 */

namespace core\lib;

class model extends \PDO
{
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=test';
        $username = 'root';
        $passwd = '';
        try {
            parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException $e) {
            op($e->getMessage());
        }
    }
}