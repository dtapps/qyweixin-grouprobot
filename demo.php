<?php
/*
                   _ooOoo_
                  o8888888o
                  88" . "88
                  (| -_- |)
                  O\  =  /O
               ____/`---'\____
             .'  \\|     |//  `.
            /  \\|||  :  |||//  \
           /  _||||| -:- |||||-  \
           |   | \\\  -  /// |   |
           | \_|  ''\---/''  |   |
           \  .-\__  `-`  ___/-. /
         ___`. .'  /--.--\  `. . __
      ."" '<  `.___\_<|>_/___.'  >'"".
     | | :  `- \`.;`\ _ /`;.`/ - ` : | |
     \  \ `-.   \_ __\ /__ _/   .-` /  /
======`-.____`-.___\_____/___.-`____.-'======
                   `=---='
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
*/

/**
 * Created by : PhpStorm
 * Date: 2019/10/26
 * Time: 22:53
 * User: 李光春
 */

require_once './vendor/autoload.php';

$qywx = new \liguangchun\qyweixin\grouprobot\QyWxBot();
// 配置通知地址
$qywx->setConfig([
    'webhook' => 'https://qyapi.weixin.qq.com/cgi-bin/webhook/send?key=xxx'
]);
// 发送文本消息
$res = $qywx->text('测试测试');
var_dump($res);
