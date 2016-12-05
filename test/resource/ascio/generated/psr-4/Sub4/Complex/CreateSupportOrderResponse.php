<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateSupportOrderResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $CreateSupportOrderResult;
    /**
     * @var string
     */
    public $orderId;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateSupportOrderResult($val)
    {
        $this->CreateSupportOrderResult = (Response)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOrderId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for orderId');
        }
        $this->orderId = (string)$val;
    }
}
