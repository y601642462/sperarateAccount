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
$receiver = [
        'type'            => 'PERSONAL_WECHATID', // 分账接收方类型：MERCHANT_ID|PERSONAL_WECHATID|PERSONAL_OPENID
        'account'         => 'liutengshunshun', // 分账接收方帐号
        'name'            => '刘螣', // 分账接收方全称
        'relation_type'   => 'STAFF', // 与分账方的关系类型
        'custom_relation' => '员工', // 自定义的分账关系
];

// 实例支付对象
$pay = new \SperarateAccount\Dispatch($config);

try {
    $result = $pay->driver('wechat')->gateway('addreceiver')->apply($receiver);
    echo '<pre>';
    var_export($result);
} catch (Exception $e) {
    echo $e->getMessage();
}


