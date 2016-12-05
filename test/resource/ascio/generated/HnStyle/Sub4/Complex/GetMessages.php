<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetMessages
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $orderId;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
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
