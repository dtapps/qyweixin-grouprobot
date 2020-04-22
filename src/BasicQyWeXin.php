<?php

// +----------------------------------------------------------------------
// | 企业微信群通知
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://gitee.com/liguangchun/qyweixin-grouprobot
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 仓库地址 ：https://gitee.com/liguangchun/qyweixin-grouprobot
// | github 仓库地址 ：https://github.com/GC0202/qyweixin-grouprobot
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/qyweixin-grouprobot
// +----------------------------------------------------------------------

namespace DtApp\Notice\QyWeiXin;

/**
 * 中间件
 * Class BasicQyWeXin
 * @package DtApp\Notice\QyWeiXin
 */
class BasicQyWeXin
{
    /**
     * 定义当前版本
     */
    const VERSION = '1.0.2';

    /**
     * 配置
     * @var
     */
    public $config;

    /**
     * Base constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->config = new DataArray($options);
    }
}
