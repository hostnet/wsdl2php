<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ValidateOrder
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Order
     */
    public $order;
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
        $this->sessionId = ()$val;
    }

    /**
     * @param Order $val
     * @throws Exception
     */
    public function setOrder($val)
    {
        $this->order = ()$val;
    }
}
