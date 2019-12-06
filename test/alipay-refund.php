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
    'out_trade_no'              => time(), // 商户订单号
//    'trade_no' => '1', // 支付宝交易号
    'refund_amount'             => (float)'0.01', // 退款的金额
    'refund_currency'           => 'CNY', // 退款的金额
    'refund_reason'             => '退款的原因说明', // 退款的原因说明
    'out_request_no'            => time(), // 标识一次退款请求
//    'operator_id' => '11', // 商户的操作员编号
//    'store_id	' => '11', // 商户的门店编号
//    'terminal_id' => '11', // 商户的终端编号
    'refund_royalty_parameters' => [
        'royalty_type'      => 'transfer',
        'trans_out_type'    => 'loginName',    //支出方账户
        'trans_out'         => '1513153155',    //支出方账户
        'trans_in_type'     => 'loginName',    //收入方账户类型
        'trans_in'          => '13532589457',    //收入方账户
        'amount'            => (float)'0.01',    //分账的金额
        'amount_percentage' => 13,    //收入方账户类型
        'desc'              => '分账描述',    //分账描述
    ], // 退分账明细信息
];

// 实例支付对象
$pay = new \SperarateAccount\Dispatch($config);

try {
    $res = $pay->driver('alipay')->gateway('refund')->apply($options);
    var_dump($res);
} catch (Exception $e) {
    echo $e->getMessage();
}


