<?php

namespace Controle;

class SearchContactResponse
{
    /**
     * @var \Controle\Response
     */
    public $searchcontactresult;
    /**
     * @var array \Controle\Contact
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
