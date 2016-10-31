<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetOrder
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var string
     */
    public $orderid;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->orderid = (int)$val;
    }
}
