<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchContactResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $searchcontactresult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Contact
     */
    public $contacts;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setSearchContactResult($val)
    {
        $this->searchcontactresult = (int)$val;
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
