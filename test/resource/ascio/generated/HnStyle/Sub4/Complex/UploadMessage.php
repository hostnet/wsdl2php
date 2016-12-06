<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UploadMessage
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
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Message
     */
    public $message;
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
        $this->sessionId = $val;
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
        $this->orderId = $val;
    }

    /**
     * @param Message $val
     * @throws Exception
     */
    public function setMessage($val)
    {
        $this->message = $val;
    }
}
