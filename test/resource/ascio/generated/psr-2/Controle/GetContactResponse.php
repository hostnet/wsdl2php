<?php

namespace Controle;

class GetContactResponse
{
    /**
     * @var \Controle\Response
     */
    public $getcontactresult;
    /**
     * @var \Controle\Contact
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
