<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ValidateOrder
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Order
     */
    public $order;
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
     * @param Order $val
     * @throws Exception
     */
    public function setOrder($val)
    {
        $this->order = (int)$val;
    }
}
