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
   'receiver_list'=> [
       [
           'type'    => 'loginName',
           'account' => '13582539457',
           'name'    => '刘螣',
           'memo'    => '员工分红',
       ]
   ]
];

// 实例支付对象
$pay = new \SperarateAccount\Dispatch($config);

try {
    $res = $pay->driver('alipay')->gateway('unbind')->apply($options);
    var_dump($res);
} catch (Exception $e) {
    echo $e->getMessage();
}


