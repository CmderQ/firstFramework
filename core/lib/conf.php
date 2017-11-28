<?php
/**
 * 配置类方法
 * Created by PhpStorm.
 * Filename:  conf.php
 * User:      cmder
 * Date:      2017/11/28
 * Time:      23:07
 */

namespace core\lib;

class conf
{
    static public $conf = [];

    static public function get($name, $file)
    {
        if (isset(self::$conf[$file])) {
            return self::$conf[$file][$name];
        } else {
            $path = FRAMEWORK . '\core\config\\' . $file . '.php';
            if (is_file($path)) {
                $config = include $path;
                if (isset($config[$name])) {
                    self::$conf[$file] = $config;
                    return $config[$name];
                } else {
                    throw new \Exception('没有这个配置项' . $name);
                }
            } else {
                throw new \Exception('找不到配置文件' . $file);
            }
        }
    }

    static public function all($file)
    {
        if (isset(self::$conf[$file])) {
            return self::$conf[$file];
        } else {
            $path = FRAMEWORK . '\core\config\\' . $file . '.php';
            if (is_file($path)) {
                $config = include $path;
                self::$conf[$file] = $config;
                return self::$conf[$file];
            } else {
                throw new \Exception('找不到配置文件' . $file);
            }
        }
    }
}