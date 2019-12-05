<?php
/**
 * 企业微信群通知
 * (c) Chaim <gc@dtapp.net>
 */

$qywx = new \liguangchun\QyWeiXin\Notice\QyWeiXin([
    'webhook' => '通知地址'
]);
$qywx->text('测试');
$qywx->markdown('测试');
