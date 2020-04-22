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

use Exception;

/**
 * 错误处理
 * Class QyWeXinException
 * @package DtApp\Notice\QyWeiXin
 */
class QyWeXinException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}

