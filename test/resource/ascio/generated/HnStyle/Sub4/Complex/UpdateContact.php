<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UpdateContact
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Contact
     */
    public $contact;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = $val;
    }

    /**
     * @param Contact $val
     * @throws \Exception
     */
    public function setContact($val)
    {
        $this->contact = $val;
    }
}
