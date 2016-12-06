<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * NotificationMessageType
 * (out) A template for an SMS notification message.
 */
class NotificationMessageType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | (out) The SMS message.
     */
    public $MessageBody;
    /**
     * @var string | (out) The EIAS userId.
     */
    public $EIAS;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMessageBody($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for MessageBody');
        }
        $this->MessageBody = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEIAS($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EIAS');
        }
        $this->EIAS = $val;
    }
}
