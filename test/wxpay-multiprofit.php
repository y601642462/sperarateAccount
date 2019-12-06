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

// 支付参数
$options = [
    'transaction_id'     => '4200000439201912035776770421', // 微信订单号
    'out_order_no'     => time().rand(11,99), // 商户分账单号
    'receivers'     => [
        [
        "type"=>"PERSONAL_WECHATID",
        "account"=>"y601642462",
        "amount"=>1,//必须是int类型
        "description"=>"返利",
    ],
        ], // 分账接收方列表
];

// 实例支付对象
$pay = new \SperarateAccount\Dispatch($config);

try {
    $result = $pay->driver('wechat')->gateway('multiprofit')->apply($options);
    echo '<pre>';
    var_export($result);
} catch (Exception $e) {
    echo $e->getMessage();
}


