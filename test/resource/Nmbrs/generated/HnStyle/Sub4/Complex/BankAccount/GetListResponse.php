<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\BankAccount;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount
     */
    public $bankaccount_getlistresult;
    /**
     * @param ArrayOfBankAccount $val
     * @throws Exception
     */
    public function setBankAccountGetListResult($val)
    {
        $this->bankaccount_getlistresult = (int)$val;
    }
}
