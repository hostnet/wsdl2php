<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateContactResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $createcontactresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Contact
     */
    public $contact;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateContactResult($val)
    {
        $this->createcontactresult = (int)$val;
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
