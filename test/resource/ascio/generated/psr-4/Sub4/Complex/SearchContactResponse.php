<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchContactResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $SearchContactResult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Contact
     */
    public $contacts;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setSearchContactResult($val)
    {
        $this->SearchContactResult = (int)$val;
    }

    /**
     * @param ArrayOfContact $val
     * @throws Exception
     */
    public function setContacts($val)
    {
        $this->contacts = (int)$val;
    }
}
