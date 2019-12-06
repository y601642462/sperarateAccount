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

// 参考请求参数  https://docs.open.alipay.com/270/alipay.trade.page.pay
$options = [
    'out_trade_no' => '4654646746', // 商户订单号
//    'trade_no' => '4654646746', // 支付宝交易号
];

// 实例支付对象
$pay = new \SperarateAccount\Dispatch($config);

try {
    $res = $pay->driver('alipay')->gateway('query')->apply($options);
    var_dump($res);
} catch (Exception $e) {
    echo $e->getMessage();
}


