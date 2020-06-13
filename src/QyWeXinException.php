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
// | gitee 仓库地址 ：https://gitee.com/liguangchun/qyweixin-grouprobot.git
// | github 仓库地址 ：https://github.com/GC0202/qyweixin-grouprobot.git
// | huaweicloud 仓库地址：https://codehub-cn-south-1.devcloud.huaweicloud.com/composer00001/qyweixin-grouprobot.git
// | weixin 仓库地址：https://git.weixin.qq.com/liguangchun/qyweixin-grouprobot.git
// | gitlab 仓库地址：https://gitlab.com/liguangchun/qyweixin-grouprobot.git
// | aliyun 仓库地址：https://code.aliyun.com/liguancghun/qyweixin-grouprobot.git
// | tencent 仓库地址：https://e.coding.net/liguangchundt/qyweixin-grouprobot.git
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/qyweixin-grouprobot
// +----------------------------------------------------------------------

namespace DtApp\Notice\QyWeiXin;

use Exception;

/**
 * 错误处理
 * Class QyWeXinException
 * @package DtApp\Notice\QyWeiXin
 */
class QyWeXinException extends Exception
{
    /**
     * @return string
     */
    public function errorMessage()
    {
        return $this->getMessage();
    }
}

