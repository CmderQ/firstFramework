<?php
/**
 * Created by PhpStorm.
 * Filename:  index.php
 * User:      cmder
 * Date:      2017/11/26
 * Time:      22:24
 */

namespace core;

class index
{
    public static $classMap = array();

    static public function run()
    {
        $route = new \core\lib\route();
        op($route);
    }

    /**
     * 自动加载类库
     * @param $class
     * @return bool
     */
    static public function load($class)
    {
        if (isset(self::$classMap['$class'])) {
            return true;
        } else {
            $class = str_replace("\\", '/', $class);
            $file = FRAMEWORK . '/' . $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }
}