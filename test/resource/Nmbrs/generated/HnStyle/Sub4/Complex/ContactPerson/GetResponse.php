<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\ContactPerson;

class GetResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DebtorContactPerson
     */
    public $contactperson_getresult;
    /**
     * @param DebtorContactPerson $val
     * @throws Exception
     */
    public function setContactPersonGetResult($val)
    {
        $this->contactperson_getresult = (int)$val;
    }
}
