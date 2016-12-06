<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MyMessagesForwardDetailsType
 * Details relating to the forwarding of an alert or message.
 */
class MyMessagesForwardDetailsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var dateTime | The date and time a user forwarded an alert or message.
     */
    public $UserForwardDate;
    /**
     * @var string | Encoding used to forward an alert or message.
     */
    public $ForwardMessageEncoding;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setUserForwardDate($val)
    {
        $this->UserForwardDate = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setForwardMessageEncoding($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ForwardMessageEncoding');
        }
        $this->ForwardMessageEncoding = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
