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

// 支付参数  查询
$optioin = [
    'transaction_id'     => '4200000439201912035776770421', // 微信订单号
    'out_order_no'     => '157535585038', // 商户分账单号
    'description'     => '全部分账完毕', // 商户分账单号
];

// 实例支付对象
$pay = new \SperarateAccount\Dispatch($config);

try {
    $result = $pay->driver('wechat')->gateway('profitfinish')->apply($optioin);
    echo '<pre>';
    var_export($result);
} catch (Exception $e) {
    echo $e->getMessage();
}


