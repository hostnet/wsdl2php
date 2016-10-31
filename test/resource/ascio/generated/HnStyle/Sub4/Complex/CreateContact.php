<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateContact
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Contact
     */
    public $contact;
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
     * @param Contact $val
     * @throws Exception
     */
    public function setContact($val)
    {
        $this->contact = (int)$val;
    }
}
