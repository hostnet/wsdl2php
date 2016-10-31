<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * NotificationMessageType
 * (out) A template for an SMS notification message.
 */
class NotificationMessageType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var string | (out) The SMS message.
     */
    public $messagebody;
    /**
     * @var string | (out) The EIAS userId.
     */
    public $eias;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setMessageBody($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for MessageBody');
        }
        $this->messagebody = (int)$val;
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
        $this->eias = (int)$val;
    }
}
