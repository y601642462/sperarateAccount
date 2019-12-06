<?php


namespace SperarateAccount\Gateways\Wechat;


use SperarateAccount\Gateways\Wechat;

class ProfitGateway extends Wechat
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
        if (isset($options['receivers']) && is_array($options['receivers'])) {
            $options['receivers'] = json_encode($options['receivers'], JSON_UNESCAPED_UNICODE);
        }
        $this->config = array_merge($this->config, $options);
        $this->config['sign'] = $this->getHashSign($this->config);
        $data = $this->getResult($this->gateway_profit, true);

        return $data;
    }
}