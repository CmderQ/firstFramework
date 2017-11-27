<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */
define('FRAMEWORK', realpath('./'));
define('CORE', FRAMEWORK . './core');
define('APP', FRAMEWORK . './APP');
define('MODULE', 'app');
define('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}

include CORE . '/common/function.php';

include CORE . '/index.php';

spl_autoload_register('\core\index::load');
\core\index::run();