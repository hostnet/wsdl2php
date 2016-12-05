<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateContactResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $CreateContactResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Contact
     */
    public $contact;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateContactResult($val)
    {
        $this->CreateContactResult = ()$val;
    }

    /**
     * @param Contact $val
     * @throws Exception
     */
    public function setContact($val)
    {
        $this->contact = ()$val;
    }
}
