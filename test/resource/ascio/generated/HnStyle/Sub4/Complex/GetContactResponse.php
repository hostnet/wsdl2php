<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetContactResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $GetContactResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Contact
     */
    public $contact;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetContactResult($val)
    {
        $this->GetContactResult = (Response)$val;
    }

    /**
     * @param Contact $val
     * @throws Exception
     */
    public function setContact($val)
    {
        $this->contact = (Contact)$val;
    }
}
