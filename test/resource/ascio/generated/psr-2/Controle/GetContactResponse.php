<?php

namespace Controle;

class GetContactResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Response
     */
    public $GetContactResult;
    /**
     * @var \Controle\Contact
     */
    public $contact;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws \Exception
     */
    public function setGetContactResult($val)
    {
        $this->GetContactResult = $val;
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
