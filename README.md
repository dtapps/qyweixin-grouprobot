# qyweixin-grouprobot
thinkphp 企业微信机器人扩展

## 安装
```
composer require liguangchun/qyweixin-grouprobot
```

## 使用
```
use liguangchun\qyweixin\grouprobot\QyWxBot;

class Index
{
    public function index()
    {
        // 实例化
        $qywx = new QyWxBot();
        // 配置通知地址
        $qywx->setConfig([
            'webhook' => 'https://qyapi.weixin.qq.com/cgi-bin/webhook/send?key=xxx'
        ]);
        // 发送文本消息
        $res = $qywx->text('测试测试');
    }
}
```
