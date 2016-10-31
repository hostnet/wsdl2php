<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\AccountantContact;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\DebtorContactPerson
     */
    public $accountantcontact_getlistresult;
    /**
     * @param ArrayOfDebtorContactPerson $val
     * @throws Exception
     */
    public function setAccountantContactGetListResult($val)
    {
        $this->accountantcontact_getlistresult = (int)$val;
    }
}
