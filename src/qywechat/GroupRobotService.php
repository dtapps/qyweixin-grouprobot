<?php

// +----------------------------------------------------------------------
// | ThinkPHP6企业微信群通知 for ThinkLibrary 6.0
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://www.dtapp.net
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | 国内仓库地址 ：https://gitee.com/liguangchun/qyweixin-grouprobo
// | 国外仓库地址 ：https://github.com/GC0202/qyweixin-grouprobo
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/qyweixin-grouprobo
// +----------------------------------------------------------------------

namespace DtApp\Notice\QyWeiXin\qywechat;

use DtApp\Notice\QyWeiXin\exception\Exception;
use DtApp\ThinkLibrary\Service;
use DtApp\ThinkLibrary\service\curl\HttpService;

/**
 * 定义当前版本
 */
const VERSION = '1.0.5';

/**
 * 企业微信机器人扩展
 * Class GroupRobotService
 * @package DtApp\Notice\QyWeiXin\qywechat
 */
class GroupRobotService extends Service
{
    /**
     * Api接口
     * @var string
     */
    private $apiUrl = "https://qyapi.weixin.qq.com/";

    /**
     * 消息类型
     * @var string
     */
    private $msgType = 'text';

    /**
     * 链接
     * @var string
     */
    private $_webHook = '';

    /**
     * 链接
     * @param string $webHook
     * @return $this
     */
    public function webHook($webHook = '')
    {
        $this->_webHook = $webHook;
        return $this;
    }

    /**
     * key
     * @var string
     */
    private $_key = '';

    /**
     * key
     * @param string $key
     * @return $this
     */
    public function key($key = '')
    {
        $this->_key = $key;
        return $this;
    }

    /**
     * 发送文本消息
     * @param string $content 消息内容
     * @return bool
     * @throws Exception
     */
    public function text(string $content = '')
    {
        $this->msgType = 'text';
        return $this->send([
            'text' => [
                'content' => $content,
            ],
        ]);
    }

    /**
     * 发送markdown消息
     * @param string $content 消息内容
     * @return bool
     * @throws Exception
     */
    public function markdown(string $content = '')
    {
        $this->msgType = 'markdown';
        return $this->send([
            'markdown' => [
                'content' => $content,
            ],
        ]);
    }

    /**
     * 组装发送消息
     * @param array $data 消息内容数组
     * @return bool
     * @throws Exception
     */
    private function send(array $data)
    {
        if (empty($this->_webHook) && empty($this->_key)) {
            throw new Exception('企业微信自定义机器人接口未配置，【webhook，key】请配置其中一个');
        }
        if (empty($data['msgtype'])) {
            $data['msgtype'] = $this->msgType;
        }
        if (!empty($this->_webHook)) {
            return HttpService::instance()
                ->url($this->_webHook)
                ->data($data)
                ->post()
                ->toArray();
        }
        if (!empty($this->_key)) {
            return HttpService::instance()
                ->url("{$this->apiUrl}cgi-bin/webhook/send?key=" . $this->_key)
                ->data($data)
                ->post()
                ->toArray();
        }

        throw new Exception('企业微信自定义机器人接口未配置，【webhook，key】请配置其中一个');
    }
}