<?php
/**
 * 日志类
 * Created by PhpStorm.
 * Filename:  log.php
 * User:      cmder
 * Date:      2017/11/30
 * Time:      23:16
 */

namespace core\lib;

use core\lib\conf;

class log
{
    static $class;

    /**
     * 1 日志存储方式
     * 2 写日志
     */
    static public function init()
    {
        $drive = conf::get('DRIVE', 'log');
        $class = '\core\lib\drive\log\\' . $drive;
        self::$class = new $class;
    }

    static public function log($name,  $file = 'log')
    {
        self::$class->log($name, $file);
    }
}