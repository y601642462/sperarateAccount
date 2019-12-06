<?php


namespace SperarateAccount\Gateways\Wechat;


use Pay\Exceptions\GatewayException;
use SperarateAccount\Gateways\Wechat;

class AddreceiverGateway extends Wechat
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
    public function apply(array $receiver = [])
    {
        $this->unsetTradeTypeAndNotifyUrl();
        $this->config = array_merge($this->config,['receiver'=>json_encode($receiver,JSON_UNESCAPED_UNICODE)]);
        $this->config['sign'] = $this->getHashSign($this->config);
        $data = $this->getResult($this->gateway_addreceiver);

        return $data;
    }
}