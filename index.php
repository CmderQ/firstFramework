<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */
define('FRAMEWORK', realpath('./'));
define('CORE', FRAMEWORK . './core');
define('APP', FRAMEWORK . './app');
define('LOG', FRAMEWORK . './log');
define('MODULE', 'app');
define('DEBUG', true);

include "vendor/autoload.php";

if (DEBUG) {
    $whoops = new \Whoops\Run;
    $errorTitle = "框架运行";
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}

include CORE . '/common/function.php';

include CORE . '/index.php';

//类自动加载
spl_autoload_register('\core\index::load');
\core\index::run();