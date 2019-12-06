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
    'out_request_no' => time(), // 商户订单号
    'trade_no' => 'asdfasdf46sa54f564', // 支付宝订单号
    'royalty_parameters' => [
        'trans_out_type' => 'loginName', //支出方账户类型
        'trans_out'      => '1513153151',//支出方账户类型
        'trans_in_type'  => 'loginName',//收入方账户类型
        'trans_in'       => '1513153151',//收入方账户类型
        'amount'         => (float)'0.01',//分账的金额，单位为元
        'desc'           => '分账给XXX',//分账描述
    ], // 商户订单号
];

// 实例支付对象
$pay = new \SperarateAccount\Dispatch($config);

try {
    $res = $pay->driver('alipay')->gateway('settle')->apply($options);
    var_dump($res);
} catch (Exception $e) {
    echo $e->getMessage();
}


