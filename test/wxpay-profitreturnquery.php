<?php

// +----------------------------------------------------------------------
// | pay-php-sdk
// +----------------------------------------------------------------------
// | 版权所有 2014~2017 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/pay-php-sdk
// +----------------------------------------------------------------------

include '../vendor/autoload.php';

// 加载配置参数
$config = require(__DIR__ . '/config.php');

// 支付参数  分账退回查询（未测试）
$optioin = [
//    'order_id'=>"222",  //微信分账单号     和下面的参数二选一
    'out_order_no'     => '157535585038', // 商户分账单号
    'out_return_no'     => '157535585', // 商户分账单号
];

// 实例支付对象
$pay = new \SperarateAccount\Dispatch($config);

try {
    $result = $pay->driver('wechat')->gateway('profitreturnquery')->apply($optioin);
    echo '<pre>';
    var_export($result);
} catch (Exception $e) {
    echo $e->getMessage();
}


