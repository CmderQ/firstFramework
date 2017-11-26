<?php
/**
 * Created by PhpStorm.
 * Filename:  route.php
 * User:      cmder
 * Date:      2017/11/26
 * Time:      22:40
 */

namespace core\lib;

class route
{
    public $ctrl;
    public $action;

    public function __construct()
    {
        /**
         * framework.com/index/index 获取控制器和方法
         * 步骤
         * 1 隐藏index.php
         * 2 获取URL参数部分
         * 3 返回对应控制和方法
         */
        if (isset($_SERVER['REDIRECT_URL']) && $_SERVER['REDIRECT_URL'] != '/') {
            // 解析 /index/index
            $path = $_SERVER['REDIRECT_URL'];
            $pathArr = explode('/', trim($path, '/'));

            if (isset($pathArr[0])) {
                $this->ctrl = $pathArr[0];
            }
            unset($pathArr[0]);

            if (isset($pathArr[1])) {
                $this->action = $pathArr[1];
                unset($pathArr[1]);
            } else {
                $this->action = 'index';
            }

            //url多余部分换成GET
            //id/1/str/test
            $count = count($pathArr) + 2;
            $i = 2;
            while ($i < $count) {
                if (isset($pathArr[$i + 1])) {
                    $_GET[$pathArr[$i]] = $pathArr[$i + 1];
                }
                $i = $i + 2;
            }

        } else {
            $this->ctrl = 'index';
            $this->action = 'index';
        }
    }
}