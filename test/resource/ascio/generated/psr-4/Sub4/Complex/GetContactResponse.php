<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetContactResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $getcontactresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Contact
     */
    public $contact;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetContactResult($val)
    {
        $this->getcontactresult = (int)$val;
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
