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

    public $assign;

    static public function run()
    {
        \core\lib\log::init();
        \core\lib\log::log($_SERVER, 'server');
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $ctrlAction = $route->action;
        $ctrlFile = APP . '/controller/' . $ctrlClass . 'Controller.php';
        $ctrlClass = '\\' . MODULE . '\controller\\' . $ctrlClass . 'Controller';

        if (is_file($ctrlFile)) {
            include $ctrlFile;
            $ctrl = new $ctrlClass();
            $ctrl->$ctrlAction();
            \core\lib\log::log('ctrl:' . $ctrlClass . '   ' . 'action:' . $ctrlAction);
        } else {
            throw new \Exception('找不到控制器' . $ctrlClass);
        }
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


    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $files = APP . '/views/' . $file;
        if (is_file($files)) {
            $loader = new \Twig_Loader_Filesystem(APP . '/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => LOG . '/twig',
                'debug' => DEBUG,
            ));
            $template = $twig->load($file);
            $template->display($this->assign ? $this->assign : '');
        }
    }
}