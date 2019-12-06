<?php


namespace SperarateAccount\Gateways\Wechat;


use SperarateAccount\Gateways\Wechat;

class ProfitfinishGateway extends Wechat
{
    /**
     * 当前操作类型
     * @return string
     */
    protected function getTradeType()
    {
        return '';
    }

    /**
     * 应用并返回参数
     * @param array $options
     * @return array
     * @throws \Pay\Exceptions\GatewayException
     */
    public function apply(array $options = [])
    {
        $this->unsetTradeTypeAndNotifyUrl();
        $this->config = array_merge($this->config, $options);
        $this->config['sign'] = $this->getHashSign($this->config);
        $data = $this->getResult($this->gateway_profitfinish,true);

        return $data;
    }
}