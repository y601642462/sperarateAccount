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

return [
    // 微信支付参数
    'wechat' => [
        // 沙箱模式
        'debug'      => false,
        // 应用ID
        'app_id'     => 'wxb5372885631688c5',
        // 微信支付商户号
        'mch_id'     => '1442885102',
        /*
         // 子商户公众账号ID
         'sub_appid'  => '子商户公众账号ID，需要的时候填写',
         // 子商户号
         'sub_mch_id' => '子商户号，需要的时候填写',
        */
        // 微信支付密钥
        'mch_key'    => '6a8bb55dada69cd2094b540bf144a20a',
        // 微信证书 cert 文件
        'ssl_cer'    => __DIR__ . '/cert/apiclient_cert.pem',
        // 微信证书 key 文件
        'ssl_key'    => __DIR__ . '/cert/apiclient_key.pem',
        // 缓存目录配置
        'cache_path' => '',
        // 支付成功通知地址
        'notify_url' => '',
        // 网页支付回跳地址
        'return_url' => '',
    ],
    // 支付宝支付参数
    'alipay' => [
        // 沙箱模式
        'debug'       => false,
        // 应用ID
        'app_id'      => '2018022602276600',
        // 支付宝公钥(1行填写)
        'public_key'  => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3GfzbSLjfR6FTi/0JIzsHUjjWGx296iuwGdyUR6FImfxu6Hi5QCaxzFfmkrh83GEMcnfxqz5OrtBYCvbIHpnrefJzyhmksGddRdLpva0ifCV/KnBm6zQ05eKdKUhU/a97ZP6qcC78QxdX8Er1dO9rG9+5hhg4+xMLqZ5JDbXROdoDFT+oZ6v2USekzQSIdxBJBz4hbjJYFq2dSj1rYrrUV6XlJVBmq8SDkGTWoRrDWh3l9VtIs6WXIma1za6s5CTodOtsZPOpGY9hVQQ2UXyR1eo4+T+CTdsTJbx0TADVVvKaUR1mKe9kv08U1RXQdtJuBGsX8+BKdiK/G8pYx3XEwIDAQAB',
        // 支付宝私钥(1行填写)
        'private_key' => 'MIIEpgIBAAKCAQEA3GfzbSLjfR6FTi/0JIzsHUjjWGx296iuwGdyUR6FImfxu6Hi5QCaxzFfmkrh83GEMcnfxqz5OrtBYCvbIHpnrefJzyhmksGddRdLpva0ifCV/KnBm6zQ05eKdKUhU/a97ZP6qcC78QxdX8Er1dO9rG9+5hhg4+xMLqZ5JDbXROdoDFT+oZ6v2USekzQSIdxBJBz4hbjJYFq2dSj1rYrrUV6XlJVBmq8SDkGTWoRrDWh3l9VtIs6WXIma1za6s5CTodOtsZPOpGY9hVQQ2UXyR1eo4+T+CTdsTJbx0TADVVvKaUR1mKe9kv08U1RXQdtJuBGsX8+BKdiK/G8pYx3XEwIDAQABAoIBAQCowYLV5ieuTicdRYQ2VBwZFAzWUD4KxAIBWXNi/u5K+LFSy9HRK1RW/cvIdFtqrVjdUkdfdGNjf6q/uvSNeotV0SpozfMznME1vP90uGJlV2tPyJ5v1rMRv28IfsL06fBkLrB3NxXvq1r3DQ3GK9iHZdsQzEurV+rAsUAB5WeP3f5YQFzsZXdi5TJbCoLAgbzniV7nevAsUVi1jhqgJwlnPfVt0PaPsm9gmFN5FQubTNkGSceFe+6Md1JHbwmcPcY+SqgAJESQu+AghrAzDCi/Mo2HsHCaPegdEeI2HA6fk3uw5fvy8rUKv0hjfrpCNnGLAJBocXCo8bCoih4H27DpAoGBAPkaKCK6SufhHEZcvMe5WpClRmEJXO68NnmMfqHFATRdJUiYjU5TtgvuwQYa0PZNKfrEHnbnvL6nz7KhHCBLz+PI6VgxpURiVlRN9j/98rDxSk3EcYkCb7JCBoPxfrsncbsKHX4Mzb1ADarYlZMSu2SWLJLoqzZslVjSusi1HfdVAoGBAOKCX0dPyyR3k1jcBekmDdJiiExacCvDN/tD68mHDkKREd0URcLRTR2OH+YmS/v3MUxHOA/uk7o/GzlXJCIJ4kY13+ZB5f8EMO9sTERsL+qiqyODQFYUuxfPsK5Rp1mo5rt7XdEHThyZvwo1ROcGLfjT8zbBIg1AUGgH7VnWoETHAoGBAKN/Vo6MpbOSXiOUpNeWQeokgJAaPCP55utampcFHihHZrxCXKTnbtpgJ9Mg8Lxoo0ATT0eODKU6sak186cC+30vlnCrjSTYQn9s+E7CGHOou7NVV4uszLE8gthBPoQKfKxeFENyles8SnwzUeFJbzOzGaiHDDFZjaDSF4S60+NNAoGBAJzFHQqvOGtJ84qJ5fFjLCfTmIA4C/DOEb3vWY9G0WDTJSj9cfcPg68UAhH5qZd/k/g2RqAIQOij6sS6AkEo1BpCCXBFZdkl3nSnYPXuZw+ffJF8sxehC4jEb4WG8CvHEcLq9JjK1I5I/wcirUi0ZzcUAv5/l4DSZZRLAESwnoZbAoGBAKrZxD2ANH6mMZycYaCUepU+BHhN6gif9t0N70OsslHEZdEmRir14IJXQnr3BTDZG14RHcs7CbdyLZ9TSoNgs9kCyWBauH50FZG1HSOm3Jtqq9RDOOMRYPmzqe88rG/kJLKmr7UVGtl0ThkQ2Kw9DDKgPSsDUhrV1rrDttDVdGyE',
        // 缓存目录配置
        'cache_path'  => '',
        // 支付成功通知地址
        'notify_url'  => '',
        // 网页支付回跳地址
        'return_url'  => '',
    ],
];
