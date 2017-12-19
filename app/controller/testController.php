<?php
/**
 * Created by PhpStorm.
 * Filename:  testController.php
 * User:      cmder
 * Date:      2017/12/19
 * Time:      23:06
 */
namespace app\controller;

use core\index;
use PHPCrawler\Crawler;
include "vendor/autoload.php";
class testController extends index
{
    public function index()
    {
        $config = array(
            'name' => 'meiriyiwen',
            'url'	=> 'http://w.ihx.cc/',
            'method' => 'depth',
            'queue' => 'redis',
            'db_config' => array(
                'dbhost'  => '127.0.0.1',
                'port'  => 3306,
                'dbuser'  => 'root',
                'dbpsw'  => 'root',
                'dbname'  => 'discussion'
            ),
            'table' => array(
                array(
                    'column' => 'title',
                    'type' => 0
                ),array(
                    'column' => 'author',
                    'type' => 0
                ),array(
                    'column' => 'time',
                    'type' => 0
                ),
            ),
            'urlSelector' => array(
                array(
                    'selector' => '/http:\/\/w.ihx.cc\/.{1,20}\/\d+.html/ism',
                    'parser'=>'Reg',
                    'childer' => array(
                        array(
                            'selector' => '//*[@id="the-post"]/div[2]/h1/span',
                            'repeat'=>true,
                            'column'=>'title',
                        ),array(
                            'selector' => '//*[@id="the-post"]/div[2]/p/span[1]/a',
                            'repeat'=>true,
                            'column'=>'author',
                        ),array(
                            'selector' => '//*[@id="the-post"]/div[2]/p/span[3]/text()',
                            'repeat'=>true,
                            'column'=>'time',
                        ),
                    )
                )
            )
        );

        $crawler = new Crawler($config);
        $crawler->run();
    }
}