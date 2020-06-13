<img align="right" width="100" src="https://cdn-oss.dtapp.net/04/999e9f2f06d396968eacc10ce9bc8a.png" alt="dtApp Logo"/>

<h1 align="left"><a href="https://www.dtapp.net/">企业微信群通知</a></h1>

📦 企业微信群通知 PHP扩展包

[![Latest Stable Version](https://poser.pugx.org/liguangchun/qyweixin-grouprobot/v/stable)](https://packagist.org/packages/liguangchun/qyweixin-grouprobot) 
[![Latest Unstable Version](https://poser.pugx.org/liguangchun/qyweixin-grouprobot/v/unstable)](https://packagist.org/packages/liguangchun/qyweixin-grouprobot) 
[![Total Downloads](https://poser.pugx.org/liguangchun/qyweixin-grouprobot/downloads)](https://packagist.org/packages/liguangchun/qyweixin-grouprobot) 
[![License](https://poser.pugx.org/liguangchun/qyweixin-grouprobot/license)](https://packagist.org/packages/liguangchun/qyweixin-grouprobot)

## 依赖环境

1. PHP7.1 版本及以上

## 托管

- Github仓库地址：https://github.com/GC0202/qyweixin-grouprobot.git
- 码云仓库地址：https://gitee.com/liguangchun/qyweixin-grouprobot.git
- gitlab仓库地址：https://gitlab.com/liguangchun/qyweixin-grouprobot.git
- 阿里云仓库地址：https://code.aliyun.com/liguancghun/qyweixin-grouprobot.git
- 腾讯云仓库地址：https://e.coding.net/liguangchundt/qyweixin-grouprobot.git
- 微信仓库地址：https://git.weixin.qq.com/liguangchun/qyweixin-grouprobot.git
- 华为云仓库地址：https://codehub-cn-south-1.devcloud.huaweicloud.com/composer00001/qyweixin-grouprobot.git

## 安装
```
composer require liguangchun/qyweixin-grouprobot -vvv
```

## 更新
```
composer update liguangchun/qyweixin-grouprobot -vvv
```

## 删除
```
composer remove liguangchun/qyweixin-grouprobot -vvv
```

## 搜索
```
composer search liguangchun/qyweixin-grouprobot -vvv
```

## 使用
参考tests文件夹的help文件或查看WiKi里的文档

```php

use DtApp\Notice\QyWeiXin\Send;

require_once '../vendor/autoload.php';

$config = [
    'webhook' => 'https://qyapi.weixin.qq.com/cgi-bin/webhook/send?key=xxx-xx-xx', // 自定义机器人接口链接，webhook和key可配置其中一个
    'key' => 'xxx-xx-xx', // 自定义机器人接口链接的key，webhook和key可配置其中一个
];
$qywx = new Send($config);
var_dump($qywx->text('测试'));
var_dump($qywx->markdown('测试'));

```
