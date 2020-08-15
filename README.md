<img align="right" width="100" src="https://kodo-cdn.dtapp.net/04/999e9f2f06d396968eacc10ce9bc8a.png" alt="www.dtapp.net"/>

<h1 align="left"><a href="https://www.dtapp.net/">ThinkPHP6企业微信群通知</a></h1>

📦 ThinkPHP6企业微信群通知

[![Latest Stable Version](https://poser.pugx.org/liguangchun/qyweixin-grouprobot/v/stable)](https://packagist.org/packages/liguangchun/qyweixin-grouprobot) 
[![Latest Unstable Version](https://poser.pugx.org/liguangchun/qyweixin-grouprobot/v/unstable)](https://packagist.org/packages/liguangchun/qyweixin-grouprobot) 
[![Total Downloads](https://poser.pugx.org/liguangchun/qyweixin-grouprobot/downloads)](https://packagist.org/packages/liguangchun/qyweixin-grouprobot) 
[![License](https://poser.pugx.org/liguangchun/qyweixin-grouprobot/license)](https://packagist.org/packages/liguangchun/qyweixin-grouprobot)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D7.1-8892BF.svg)](http://www.php.net/)
[![Code Health](https://hn.devcloud.huaweicloud.com/codecheck/v1/codecheck/task/codehealth.svg?taskId=e6994f8dd7774d03913b1e505800e6d0)](https://hn.devcloud.huaweicloud.com/codecheck/project/c7ff3e2d65674858bd363cb43ee6c35e/codecheck/task/e6994f8dd7774d03913b1e505800e6d0/detail)
[![Build Status](https://travis-ci.org/GC0202/qyweixin-grouprobot.svg?branch=6.0)](https://travis-ci.org/GC0202/qyweixin-grouprobot)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/GC0202/qyweixin-grouprobot/badges/quality-score.png?b=6.0)](https://scrutinizer-ci.com/g/GC0202/qyweixin-grouprobot/?branch=6.0)
[![Code Coverage](https://scrutinizer-ci.com/g/GC0202/qyweixin-grouprobot/badges/coverage.png?b=6.0)](https://scrutinizer-ci.com/g/GC0202/qyweixin-grouprobot/?branch=6.0)

## 依赖环境

1. PHP7.1 版本及以上

## 安装

- 国外仓库地址：[https://github.com/GC0202/qyweixin-grouprobot](https://github.com/GC0202/qyweixin-grouprobot)
- 国内仓库地址：[https://gitee.com/liguangchun/qyweixin-grouprobot](https://gitee.com/liguangchun/qyweixin-grouprobot)
- Packagist 地址：[https://packagist.org/packages/liguangchun/qyweixin-grouprobo](https://packagist.org/packages/liguangchun/qyweixin-grouprobo)

### 开发版
```text
composer require liguangchun/qyweixin-grouprobot dev-master -vvv
```

### 稳定版
```text
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

## 使用
```php
use DtApp\Notice\QyWeiXin\qywechat\GroupRobotService;

try {
    GroupRobotService::instance()
        ->key('xxx-x-x-x-xxx')
        ->text('测试');
} catch (\DtApp\Notice\QyWeiXin\exception\Exception $e) {
    var_dump($e->getMessage());
}
```
